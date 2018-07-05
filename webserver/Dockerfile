FROM php:7.2-alpine3.6

RUN mkdir -p /var/www/html

WORKDIR /var/www/html

COPY . .

EXPOSE 8080/tcp

CMD ["php", "-S", "0.0.0.0:8080"]
