<?php

namespace Codebar\DiskMonitor\Commands;

use Illuminate\Console\Command;

class DiskMonitorCommand extends Command
{
    public $signature = 'disk-monitor';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
