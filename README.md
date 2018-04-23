Edit main composer.json file
in require add "mirko/testera": "@dev"
in repositories add: { "type":"git", "url":"git@github.com:bukela/laravel_package_02.git" }


php artisan vendor:publish
php artisan migrate