<?php

namespace Maize\QueryBuilder\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Maize\QueryBuilder\Builder
 */
class Builder extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Maize\QueryBuilder\Builder::class;
    }
}
