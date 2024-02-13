FROM nginx

RUN apt-get update && \
    apt-get install -y php-fpm php-mysql && \
    apt-get clean

COPY nginx.conf /etc/nginx/nginx.conf

COPY ./php/index.php /usr/share/nginx/html/index.php
COPY InitDB.sql /usr/share/nginx/html/InitDB.sql


EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
