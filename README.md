# これはなにか
tyamahoriが作成したlaravelのプロジェクト

# セットアップ手順

1. git clone
1. `docker-compose run composer-tyamahori install`
1. `cp .env.example .env`
1. `docker-compose run php-fpm-tyamahori php artisan key:generate`
1. `chmod -R 777 storage`
1. `docker-compose up`