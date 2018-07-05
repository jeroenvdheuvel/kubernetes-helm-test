FROM nginx:1.15-alpine

RUN rm /etc/nginx/conf.d/*

COPY *.conf /etc/nginx/conf.d/

EXPOSE 8080/tcp
