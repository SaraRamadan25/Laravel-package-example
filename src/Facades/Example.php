<?php

namespace Spatie\Example\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Spatie\Example\Example
 */
class Example extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Spatie\Example\Example::class;
    }
}
