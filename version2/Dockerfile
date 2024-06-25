# Use the official PHP image with Apache
FROM php:7.4-apache

# Copy the static website files to the Apache web directory
COPY index.html /var/www/html/
COPY process.php /var/www/html/

# Expose port 80 to the outside world
EXPOSE 80

# Start Apache when the container launches
CMD ["apache2-foreground"]
