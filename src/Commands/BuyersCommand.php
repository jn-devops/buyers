<?php

namespace Homeful\Buyers\Commands;

use Illuminate\Console\Command;

class BuyersCommand extends Command
{
    public $signature = 'buyers';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
