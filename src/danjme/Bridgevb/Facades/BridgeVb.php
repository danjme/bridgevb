<?php namespace Danjme\BridgeVb\Facades;

use Illuminate\Support\Facades\Facade;

class BridgeVb extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bridgevb';
    }
}
