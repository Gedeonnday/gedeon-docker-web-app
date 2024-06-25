# Use the official PHP image with Apache
FROM php:7.4-apache

# Create a directory for your application files
RUN mkdir -p /var/www/html/version2

# Copy the static website files to the Apache web directory
COPY index.html /var/www/html/version2/
COPY process.php /var/www/html/version2/

# Expose port 80 to the outside world
EXPOSE 8080

# Start Apache when the container launches
CMD ["apache2" , "-f" , "/etc/apache2/apache2.conf"]