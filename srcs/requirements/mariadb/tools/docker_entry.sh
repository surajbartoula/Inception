#!/bin/bash

# Initialize database directory if empty
if [ ! -d "/var/lib/mysql/mysql" ]; then
  echo "Initializing database..."
  mysql_install_db --user=mysql --ldata=/var/lib/mysql
fi

# Start MySQL in the background
mysqld_safe &

# Wait for MySQL to be ready
until mysqladmin ping --silent; do
  echo -n "."; sleep 1
done

# Create Database and User
mysql -e "
    CREATE DATABASE IF NOT EXISTS $DB_NAME;
    CREATE USER IF NOT EXISTS '$DB_USER'@'%' IDENTIFIED BY '$DB_PASS';
    GRANT ALL PRIVILEGES ON $DB_NAME.* TO '$DB_USER'@'%';
    ALTER USER 'root'@'localhost' IDENTIFIED BY '$DB_ROOT_PASS';
    FLUSH PRIVILEGES;
"

# Keep MySQL running in the foreground
wait
