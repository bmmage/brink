<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Twitch\Twitch;

class TwitchServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Twitch::class, function () {
            return new Twitch;
        });
    }
}
