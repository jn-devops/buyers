<?php

namespace Homeful\Buyers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Homeful\Buyers\Buyers
 */
class Buyers extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Homeful\Buyers\Buyers::class;
    }
}
