#Используем PHP 5.6 с Apache в качестве базового образа
FROM php:5.6-apache

# Подключаем модуль Apache Rewrite
RUN cd /etc/apache2/mods-enabled && \
    ln -s ../mods-available/rewrite.load

# Устанавливаем требуемые разширения PHP
# -- GD


RUN apt-get update \
    && apt-get -y install git



RUN apt-get update \
    && apt-get -y install \
            libmagickwand-dev \
        --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && rm -r /var/lib/apt/lists/*ck





RUN apt-get update && \
    apt-get install -y libfreetype6-dev && \
    docker-php-ext-configure gd --with-freetype-dir=/usr/include/ && \
    docker-php-ext-install -j$(nproc) gd
# -- mysql
RUN docker-php-ext-install -j$(nproc) fileinfo mysql pdo_mysql



# Копируем конфигурацию сервера HTTP
COPY 000-default.conf /etc/apache2/sites-available/