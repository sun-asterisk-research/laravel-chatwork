<?php

namespace SunAsterisk\Chatwork\Laravel;

use Illuminate\Support\Facades\Facade as IlluminateFacade;
use SunAsterisk\Chatwork\Chatwork;

class Facade extends IlluminateFacade
{
    protected static function getFacadeAccessor()
    {
        return Chatwork::class;
    }
}
