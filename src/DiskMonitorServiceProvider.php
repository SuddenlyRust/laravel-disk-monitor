<?php

namespace Codebar\DiskMonitor;

use Codebar\LaravelDiskMonitor\Commands\LaravelDiskMonitorCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
<<<<<<< HEAD:src/DiskMonitorServiceProvider.php
use Codebar\DiskMonitor\Commands\DiskMonitorCommand;
=======
>>>>>>> 84dc3eff42724409c1c1d991b0d01f1ae105dfcf:src/LaravelDiskMonitorServiceProvider.php

class DiskMonitorServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-disk-monitor')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_disk_monitor_table')
            ->hasCommand(DiskMonitorCommand::class);
    }
}
