# Используем официальный образ MySQL
FROM mysql:8.0

# Копируем файлы конфигурации (если есть)
COPY ./my.cnf /etc/mysql/conf.d/my.cnf

# Устанавливаем переменные окружения для MySQL
ENV MYSQL_ROOT_PASSWORD=root12345
ENV MYSQL_DATABASE=autospasibo
ENV MYSQL_USER=root_mysql
ENV MYSQL_PASSWORD=12345

# Открываем порт 3306
EXPOSE 3306