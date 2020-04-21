<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $platform = \Schema::getConnection()->getDoctrineSchemaManager()->getDatabasePlatform(); 
        $platform->registerDoctrineTypeMapping('enum', 'string');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
