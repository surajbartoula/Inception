#!/bin/bash

# Create necessary directories
mkdir -p /var/www/html
cd /var/www/html || exit

# Clean old files
rm -rf *

# Install WP-CLI
curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
chmod +x wp-cli.phar
mv wp-cli.phar /usr/local/bin/wp

# Download and configure WordPress
wp core download --allow-root
wp config create --path=$WP_ROUTE --allow-root --dbname=$DB_NAME --dbuser=$DB_USER --dbpass=$DB_PASS --dbhost=$DB_HOST --dbprefix=wp_

# Install WordPress
wp core install --url=$DOMAIN_NAME/ --title="$WP_TITLE" \
  --admin_user=$WP_ADMIN_USR --admin_password=$WP_ADMIN_PWD \
  --admin_email=$WP_ADMIN_EMAIL --skip-email --allow-root

# Create an additional user
wp user create $WP_USR $WP_EMAIL --role=author --user_pass=$WP_PWD --allow-root

# Install theme
wp theme install astra --activate --allow-root

# Update all plugins
wp plugin update --all --allow-root

# Fix PHP-FPM socket issue dynamically
PHP_VERSION=$(php -r "echo PHP_MAJOR_VERSION.'.'.PHP_MINOR_VERSION;")
sed -i "s|listen = /run/php/php.*-fpm.sock|listen = 9000|" "/etc/php/$PHP_VERSION/fpm/pool.d/www.conf"

mkdir -p /run/php

# Start PHP-FPM
php-fpm -F
