<?php

namespace Maize\Builder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Maize\Builder\Builder
 */
class Builder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Maize\Builder\Builder::class;
    }
}
