Docker LEMP Nginx 17.9 + Php-fpm 7.4 + MariaDB 10+
=

## Structure
```
├───images/
│   ├───logs/
│   ├───mysql/
│   ├───nginx/
│   │   ├───conf.d/
│   │   │   ├───default.conf
│   │   │   └───php-fpm.conf
│   │   ├───default.d/
│   │   │   └───php.conf
│   │   ├───Dockerfile
│   │   └───nginx.conf
│   └───php/
│       └───Dockerfile
├───www/
│   └───html/
│       ├───index.html
│       ├───index.php
│       └───test.txt
└───docker-compose.yml
```

# Usage
*in project folder run*
`docker-compose up -d `



# Detail

## Nginx
Used custom image based on `alpine:3.11`

## PHP
Used custom image based on `php:7.4-fpm-alpine` 

## MariaDB 10+
Used `image: mariadb:latest`


## MySql
user: root  
pass: docker  


## Adminer
If need it just uncomment this section on docker-compose.yml file before run

![Docker Images & containers after install it](https://raw.githubusercontent.com/spacecoding42/docker-lemp/master/9910f84e9ceccf86d6a5f8ccb6501a2b.png)
