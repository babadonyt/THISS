# Use official PHP Apache image
FROM php:8.2-apache

# Enable URL rewriting
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy project files into container
COPY ./public/ /var/www/html/

# Expose port 80
EXPOSE 80
