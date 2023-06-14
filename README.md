# laravelEngine package

general composer.json

"autoload": {
    "psr-4": {
    "Retter241\\laravelEngine\\": "packages/retter241/laravel-engine/src/"
    }
},


composer dump-autoload

composer update -W


config/app.php :: 'providers'

Retter241\laravelEngine\laravelengineServiceProvider::class,
