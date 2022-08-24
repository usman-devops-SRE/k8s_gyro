FROM php:8.0-apache
WORKDIR /var/www/html
RUN apt-get update -y && apt-get install -y libmariadb-dev
RUN docker-php-ext-install mysqli 
#RUN rm /var/www/html/index.html
#COPY ./4901/ /var/www/html/
#RUN mv /var/www/html/GyroCafe.html /var/www/html/index.html
EXPOSE 80
#CMD /root/run_apache.sh
