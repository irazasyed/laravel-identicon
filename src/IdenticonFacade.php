<?php

namespace Irazasyed\LaravelIdenticon;

use Illuminate\Support\Facades\Facade;

class IdenticonFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Identicon::class;
    }
}
