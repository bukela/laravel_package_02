<?php

namespace Mirko\Testera;

use Illuminate\Support\ServiceProvider;

class TesteraServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if(!$this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }
        $this->loadViewsFrom(base_path('resouces/views'), 'testera'); //namespace 'testera' 
        $this->publishes([
            __DIR__.'/views' => base_path('resouces/views') 
        ]);
        $this->publishes([
            __DIR__.'/controllers' => base_path('app/Http/Controllers') 
        ]);
        $this->publishes([
            __DIR__.'/migrations' => database_path('migrations') 
        ], 'migrations');  //must specify type 'migrations'
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}