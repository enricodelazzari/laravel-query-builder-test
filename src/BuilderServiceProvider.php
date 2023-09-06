<?php

namespace Maize\Builder;

use Maize\Builder\Commands\BuilderCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
