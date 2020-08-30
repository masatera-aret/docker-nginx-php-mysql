FROM php:7.4-fpm

# pdo_mysqlをインストール (これでPHPファイルでmysqlと繋げるよ。)
RUN apt-get update \
    && docker-php-ext-install pdo_mysql