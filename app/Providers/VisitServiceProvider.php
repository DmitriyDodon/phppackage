<?php

namespace App\Providers;


use Illuminate\Support\ServiceProvider;
use InterfaceGeo\dmitriy\GeoServiceInteface;
use IpstackService\dmitriy\ipstackService;
use MaxmindService\dmitriy\MaxmindService;

class VisitServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(GeoServiceInteface::class , function (){
            return new MaxmindService();
//            return new ipstackService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
