<?php

namespace Maize\Builder\Commands;

use Illuminate\Console\Command;

class BuilderCommand extends Command
{
    public $signature = 'laravel-query-builder';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
