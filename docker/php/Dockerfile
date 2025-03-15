# Используем официальный образ PHP с Apache
FROM php:8.1-apache

# Устанавливаем необходимые расширения PHP
RUN docker-php-ext-install pdo_mysql

# Копируем файлы приложения в контейнер
COPY ../app /var/www/html/

# Настраиваем права доступа
RUN chown -R www-data:www-data /var/www/html

# Открываем порт 80
EXPOSE 80