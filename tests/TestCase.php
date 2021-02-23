<?php

namespace Codebar\DiskMonitor\Tests;

use Codebar\LaravelDiskMonitor\LaravelDiskMonitorServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
<<<<<<< HEAD
use Codebar\DiskMonitor\DiskMonitorServiceProvider;
=======
>>>>>>> 84dc3eff42724409c1c1d991b0d01f1ae105dfcf

class TestCase extends Orchestra
{
    public function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Codebar\\DiskMonitor\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            DiskMonitorServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);

        /*
        include_once __DIR__.'/../database/migrations/create_laravel_disk_monitor_table.php.stub';
        (new \CreatePackageTable())->up();
        */
    }
}
