FROM php:8.1-apache

# Install necessary dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libpq-dev \
    unzip \
    git \
    mariadb-client \
    && docker-php-ext-install pdo pdo_mysql mysqli gd \
    && rm -rf /var/lib/apt/lists/*

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy application files
COPY . /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Ensure proper file permissions for execution
RUN find /var/www/html -type d -exec chmod 755 {} \; && \
    find /var/www/html -type f -exec chmod 644 {} \;

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
