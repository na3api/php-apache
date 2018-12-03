ARG PHP_VERSION=""
FROM php:${PHP_VERSION:+${PHP_VERSION}-}fpm-alpine
WORKDIR /var/www

RUN apk update; \
    apk upgrade;

RUN docker-php-ext-install mysqli
