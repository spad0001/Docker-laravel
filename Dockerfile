FROM php:apache
RUN apt-get update \
    && apt-get install -y libzip-dev \
    && docker-php-ext-install zip
RUN docker-php-ext-install pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
Expose 8000
