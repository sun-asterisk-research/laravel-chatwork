<?php

namespace SunAsterisk\Chatwork\Laravel;

use Illuminate\Support\ServiceProvider;
use SunAsterisk\Chatwork\Auth\APIToken;
use SunAsterisk\Chatwork\Chatwork;
use Illuminate\Contracts\Foundation\Application;

class ChatworkServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/chatwork.php',
            'chatwork'
        );

        $this->app->singleton(Chatwork::class, function (Application $app) {
            $token = $app->make('config')->get('chatwork.api_key');
            $auth = new APIToken($token);
            return new Chatwork($auth);
        });
    }
}
