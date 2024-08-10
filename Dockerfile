FROM php:8.2-apache
LABEL maintainer="renanpcruz"

RUN docker-php-ext-install mysqli
COPY ./site /var/www/html

#permitir reescrita de url
RUN a2enmod rewrite

EXPOSE 80

CMD ["apache2-foreground"]