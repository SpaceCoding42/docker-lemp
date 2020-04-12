# Для начала указываем исходный образ, он будет использован как основа
FROM php:7.4-fpm-alpine

LABEL maintainer="SpaceCodinG LEMP-PhpFpm74 <info@spacecoding.net>"



# Environment settings
ENV XDEBUG_VERSION 2.3.3
ENV PHP_MEMORY_LIMIT 256M
ENV PHP_MAX_EXECUTION_TIME 120
ENV PHP_POST_MAX_SIZE 100M
ENV PHP_UPLOAD_MAX_FILESIZE 100M
ENV PHP_INI_DIR /usr/local/etc/php


#RUN pecl channel-update pecl.php.net \
# && docker-php-ext-install \
RUN docker-php-ext-install \
-j$(nproc) \
#mbstring
#iconv
#bcmath \
##bz2 \
json \
#session \
#ctype \
##curl \
#tokenizer \
##simplexml \
#dom \
#zip \
#xml \
opcache \
pdo \
pdo_mysql
#gettext \
#gmp \
#intl \
##mcrypt \
#phar \
#soap \
#sockets \
##xml \
#xsl


# Куда же без composer'а.
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Добавим свой php.ini, можем в нем определять свои значения конфига
#ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

# Указываем рабочую директорию для PHP
WORKDIR /var/www

#RUN mkdir -p /run/php-fpm
#RUN rm /etc/php-fpm.d/www.conf
#RUN service php-fpm start
#ADD pool.conf /etc/php-fpm.d/
#RUN curl -sS https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

# Запускаем контейнер
# Из документации: The main purpose of a CMD is to provide defaults for an executing container. These defaults can include an executable,
# or they can omit the executable, in which case you must specify an ENTRYPOINT instruction as well.
CMD ["php-fpm", "-F"]

#EXPOSE 9001
