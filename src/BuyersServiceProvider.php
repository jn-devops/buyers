<?php

namespace Homeful\Buyers;

use Homeful\Buyers\Commands\BuyersCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BuyersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('buyers')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_buyers_table')
            ->hasCommand(BuyersCommand::class);
    }
}
