<?php

/**
 * Created by   :  Muhammad Yasir
 * Project Name : packeges
 * Product Name : PhpStorm
 * Date         : 21-Apr-16 1:22 PM
 * File Name    : StoreServiceProvider.php
 */
namespace Pasha\Store;

use Illuminate\Support\ServiceProvider;

class StoreServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //Loading Routes File
        include __DIR__.'/Http/routes.php';

        //Define the path of views folder
        $this->loadViewsFrom(__DIR__.'/Views','Store');

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app['Store'] = $this->app->share(function($app){
            return new Store;
        });
    }
}
