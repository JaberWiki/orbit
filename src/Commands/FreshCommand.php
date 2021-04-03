<?php

namespace Orbit\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Orbit\Facades\Orbit;

class FreshCommand extends Command
{
    protected $name = 'orbit:fresh';

    protected $description = 'Remove all existing Orbit data and start fresh.';

    public function handle()
    {
        (new Filesystem)->deleteDirectory(
            Orbit::getContentPath()
        );

        $this->info('Successfully removed all existing Orbit data.');
    }
}
