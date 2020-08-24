FROM php:7.3-apache


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install pdo pdo_mysql
RUN docker-php-ext-install mysqli 

# WORKDIR /var/www/html/

# COPY ./dev .

# RUN vendor/bin/doctrine orm:schema-tool:create


# RUN apt-get update && apt-get install -y git && apt-get install -y libzip-dev -y
# RUN docker-php-ext-configure zip --with-libzip && docker-php-ext-install zip

# RUN cd /var/www/html && composer require roave/psr-container-doctrine

# RUN cd /var/www/html composer && composer require roave/psr-container-doctrine