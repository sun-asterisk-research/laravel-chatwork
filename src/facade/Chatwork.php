<?php
namespace SunAsterisk\Chatwork\Laravel\Facades;

use Illuminate\Support\Facades\Facade;

class Chatwork extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Chatwork::class;
    }
}
