<?php

namespace App\Providers;

use AUserAgentParserService\dmitriy\UserAgentParserService;
use Illuminate\Support\ServiceProvider;
use InterfaceUA\dmitriy\UserAgentInterface;
use WichBrowserService\dmitriy\whichBrowserService;

class UserAgentProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserAgentInterface::class , function (){
            return new whichBrowserService();
//            return new UserAgentParserService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void=х.
     */
    public function boot()
    {
        //
    }
}
