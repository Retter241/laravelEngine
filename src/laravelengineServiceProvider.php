<?php

namespace Retter241\laravelEngine;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

/**
 * Провайдер пакета.
 *
 * @package Retter241\laravelEngine
 */
class laravelengineServiceProvider extends ServiceProvider
{
    /**
     * Начальная загрузка приложения.
     *
     * @param Router $router
     */
    public function boot(Router $router)
    {

        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'engine');

        $this->loadViewsFrom(__DIR__ . '/resources/views', 'engine');

        $this->publishes([
            __DIR__ . '/resources/views' => base_path() . '/resources/views/engine'
        ], 'engine-views');


        $this->publishes([
    __DIR__ . '/resources/assets' =>
    resource_path('assets/Retter241/laravelEngine'
)], 'vue-components');
      
        /*$this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadMigrationsFrom(__DIR__ . '/Database/migrations');
        $this->loadViewsFrom(__DIR__ . '/Resources/views', 'ariol');
        $this->loadTranslationsFrom(__DIR__ . '/Resources/lang', 'ariol');

        if ($this->app->runningInConsole()) {
            $this->commands([
                ControllerAriolCommand::class
            ]);
        }

        $this->publishes([
            __DIR__ . '/Config' => base_path() . '/config'
        ], 'ariol-config');

        $this->publishes([
            __DIR__ . '/Resources/lang' => base_path() . '/resources/lang'
        ], 'ariol-lang');

        $this->publishes([
            __DIR__ . '/Models' => base_path() . '/app/Models',
        ], 'ariol-models');

        $this->publishes([
            __DIR__ . '/Public' => public_path()
        ], 'ariol-public');

        $this->publishes([
            __DIR__ . '/Public' => public_path(),
            __DIR__ . '/Config' => base_path() . '/config',
            __DIR__ . '/Models' => base_path() . '/app/Models',
            __DIR__ . '/Resources/lang' => base_path() . '/resources/lang'
        ], 'ariol');*/
    }

    /**
     * Регистрация приложения.
     *
     * @return void
     */
    public function register() {
        
    }
}
