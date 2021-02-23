<?php

namespace Codebar\LaravelDiskMonitor;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codebar\LaravelDiskMonitor\LaravelDiskMonitor
 */
class LaravelDiskMonitorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-disk-monitor';
    }
}
