#イメージのベースを指定
FROM php:7.4-fpm

#composerのインストール
COPY --from=composer:1.10 /usr/bin/composer /usr/bin/composer

#npmのインストール
COPY --from=node:10.22 /usr/local/bin /usr/local/bin
COPY --from=node:10.22 /usr/local/lib /usr/local/lib
#追加。これがないとcomposer requireでmemory exhausted
COPY php.ini /usr/local/etc/php/

#パッケージ管理ツールapt-getの更新と必要パッケージのインストール
RUN apt-get update \
    && apt-get install -y \
    git \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql bcmath

#コンテナ内に入った時のディレクトリを指定
WORKDIR /var/www/html
