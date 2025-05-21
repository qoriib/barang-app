FROM laravelsail/php83-composer

WORKDIR /var/www/html

# Install intl and pdo_mysql extensions
RUN apt-get update && \
    apt-get install -y libicu-dev && \
    docker-php-ext-install intl pdo_mysql

# Copy Laravel source code
COPY ./src /var/www/html

# Copy entrypoint
COPY ./entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

# Install dependencies
RUN composer install --no-interaction --prefer-dist --optimize-autoloader

# Copy .env & generate key
RUN cp .env.example .env && php artisan key:generate

# Start only the server
CMD ["/entrypoint.sh"]