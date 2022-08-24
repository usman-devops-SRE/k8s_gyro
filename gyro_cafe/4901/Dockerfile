FROM php:8.0-apache
RUN docker-php-ext-install mysqli
WORKDIR /var/www/html
COPY . /var/www/html
COPY GyroCafe.html index.html

# Install dependencies

EXPOSE 80


