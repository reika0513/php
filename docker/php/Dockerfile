FROM php:7.4.9-fpm

COPY php.ini /usr/local/etc/php/

RUN apt update

WORKDIR /var/www

RUN curl -sS https://getcomposer.org/installer | php \
&& mv composer.phar /usr/local/bin/composer \
&& composer self-update