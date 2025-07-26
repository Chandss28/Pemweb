- ➜  coding git:(main) ✗ docker ps
- ➜  coding git:(main) ✗ docker exec -it pemweb bash
- root@pemweb:/var/www/html# composer create-project --prefer-dist raugadh/fila-starter .
- root@pemweb:/var/www/html# rm -rf *
- root@pemweb:/var/www/html# composer create-project --prefer-dist raugadh/fila-starter .
- root@pemweb:/var/www/html# rm -rf .*
- root@pemweb:/var/www/html# ls

# src di .env
    APP_NAME="Pemweb"
    APP_ENV=local
    APP_KEY=base64:q0VW6bPDldkF8YzSZn4rv6RciulqRIck4NAX+ENcfXM=
    APP_DEBUG=true
    APP_TIMEZONE='Asia/Jakarta'
    APP_URL=http://localhost
    ASSET_URL=http://localhost
    DEBUGBAR_ENABLED=false
    ASSET_PREFIX=
    #ASSET_PREFIX=/dev/kit/public example incase deployed inside a folder

    DB_CONNECTION=mysql
    DB_HOST=db_pemweb
    DB_PORT=3306
    DB_DATABASE=db_pemweb
    DB_USERNAME=root
    DB_PASSWORD=p455w0rd

# balik terminal
- root@pemweb:/var/www/html# chown -R www-data:www-data storage/*
- root@pemweb:/var/www/html# php artisan storage:link

- root@pemweb:/var/www/html# php artisan migrate
- root@pemweb:/var/www/html# php artisan migrate:fresh

- root@pemweb:/var/www/html# php artisan db:seed --force
- Lalu error minta guard, ketik php artisan shield:generate --all
- root@pemweb:/var/www/html# php artisan project:init
- root@pemweb:/var/www/html# chmod 777 -R storage/* && chmod 777 -R bootstrap/*

# Buka localhost di chrome
- localhost/admin/login
clear? Logout.

# Balik lg vscode
- template - copy folder css, images, js, plugins
- src - public - front ->> paste yang tadi
- src - resources - views - create folder component --> app.blade.php 
- template --> index.html --> paste app.blade.php
- Ikutin Github pa jeff yang "pemweb-gen2024"
    - src - buat folder Livewire isinya ShowAbout.php, ShowHome.php, ShowProfile.php
    - src - routes - web.php
    - src - resources - views - buat folder components, folder livewire
            - components isinya folder layouts isinya app.blade.php,
            - livewire isinya show-about.blade.php, show-home-page.blade, show-profile.blade.php,
    - src - public - buat folder bebas apa aja namanya itu buat naruh html, css, js, plugins, asset atau gambar, dll

- php artisan make:model Product -msc
- php artisan make:model PageConfig -msc
- php artisan make:model Seo -msc
- php artisan make:model Footer -msc
- php artisan make:model Logo -msc
- 






    