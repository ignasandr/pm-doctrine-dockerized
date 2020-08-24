FROM php:7.4-apache


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli 

WORKDIR /var/www/html/

COPY ./dev .

RUN apt-get update && apt-get install -y git && apt-get install -y libzip-dev -y
RUN docker-php-ext-configure zip && docker-php-ext-install zip

RUN php composer.phar install