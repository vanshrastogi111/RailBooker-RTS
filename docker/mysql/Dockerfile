FROM mysql:5.7

ENV MYSQL_DATABASE=railway
ENV MYSQL_ROOT_PASSWORD=root

COPY railway.sql /docker-entrypoint-initdb.d/

