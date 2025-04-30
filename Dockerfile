FROM php:8.1-fpm

# Set the working directory
WORKDIR /var/www

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libzip-dev \
    zip \
    libonig-dev \
    libxml2-dev \
    && docker-php-ext-install pdo pdo_pgsql zip mbstring xml

# Copy application files
COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install application dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose port and run Laravel's dev server
EXPOSE 8000
CMD php artisan serve --port=8000 --host=0.0.0.0
