<?php

namespace Maize\QueryBuilder;

use Maize\Builder\Commands\BuilderCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
<<<<<<< Updated upstream
=======
use Maize\QueryBuilder\Commands\BuilderCommand;
>>>>>>> Stashed changes

class BuilderServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-query-builder')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-query-builder_table')
            ->hasCommand(BuilderCommand::class);
    }
}
