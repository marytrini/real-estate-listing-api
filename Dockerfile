FROM php:8.3-fpm

# Instalar dependencias necesarias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libonig-dev \
    libzip-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring zip

# Instalar Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Establecer el directorio de trabajo
WORKDIR /var/www/html

# Copiar los archivos del proyecto
COPY . .

# Establecer permisos
RUN chown -R www-data:www-data /var/www/html

# Exponer el puerto de la aplicación
EXPOSE 8000

# Comando por defecto
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
