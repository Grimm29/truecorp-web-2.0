FROM php:7.4-apache

RUN apt-get update -y
RUN apt-get upgrade -y

RUN docker-php-ext-install mysqli

RUN docker exec -i 172.18.0.3:3306 mysql -u root -p root truecorp_db < /home/kali/Desktop/trucorp-web-2.0/db/truecorp_db.sql

EXPOSE 80


