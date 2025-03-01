FROM debian:bullseye

# Update and install necessary packages
RUN apt update && apt install -y \
    wget \
    curl \
    sendmail \
    php-mysql \
    php-mysqli \
    mariadb-client \
    php \
    php-fpm && \
    ln -s /usr/sbin/php-fpm7.4 /usr/sbin/php-fpm || true # Ensure php-fpm is linked correctly

# Copy necessary files
COPY ./tools/docker_entry.sh /usr/local/bin/

# Ensure the entry script is executable
RUN chmod +x /usr/local/bin/docker_entry.sh

# Set entrypoint
ENTRYPOINT ["/usr/local/bin/docker_entry.sh"]
