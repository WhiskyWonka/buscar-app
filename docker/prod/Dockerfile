FROM php:8.2-fpm

LABEL maintainer="Richard Grinberg"

#ARG user
#ARG uid

# RUN apt-get update \
#   && apt-get install -y git curl libpq-dev libpng-dev libonig-dev libxml2-dev zip unzip \
#   && curl -sLS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer  

# RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# RUN docker-php-ext-install pdo_pgsql mbstring exif pcntl bcmath gd

WORKDIR /var/www/html

#USER $user

COPY ./public .

# COPY ./docker/prod/php.ini /etc/php/8.2/cli/conf.d/99-sail.ini

# COPY . .
# RUN rm -rf /var/www/vendor
# RUN rm -rf /var/www/composer.lock
# RUN rm -rf /docker
# RUN composer install
# COPY .env.production .env
# RUN mkdir -p /var/www/storage/logs
# RUN php artisan cache:clear
# RUN php artisan view:clear
# RUN php artisan config:clear

EXPOSE 9000
CMD ["php-fpm"]