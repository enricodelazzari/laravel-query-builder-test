<?php

namespace Maize\QueryBuilder\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
<<<<<<< Updated upstream
use Maize\Builder\BuilderServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
=======
use Orchestra\Testbench\TestCase as Orchestra;
use Maize\QueryBuilder\BuilderServiceProvider;
>>>>>>> Stashed changes

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Maize\\QueryBuilder\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            BuilderServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-query-builder_table.php.stub';
        $migration->up();
        */
    }
}
