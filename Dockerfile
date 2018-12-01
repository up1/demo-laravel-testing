FROM composer:1.7.3
RUN apk add --no-cache $PHPIZE_DEPS
RUN pecl install xdebug-2.6.1 \
    && docker-php-ext-enable xdebug
