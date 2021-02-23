<?php

namespace Codebar\DiskMonitor;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codebar\DiskMonitor\DiskMonitor
 */
class DiskMonitorFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-disk-monitor';
    }
}
