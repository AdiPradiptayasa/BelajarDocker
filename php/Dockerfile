FROM php:8.1-fpm

# Install dependencies 
RUN apt-get update && apt-get install -y libmariadb-dev-compat libmariadb-dev

WORKDIR /var/www/html

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

EXPOSE 9000

CMD ["php-fpm"]
