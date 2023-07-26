<?php

namespace Spatie\Example;

use Illuminate\Support\Facades\Route;
use Spatie\Example\HTTP\Controllers\MyController;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\Example\Commands\ExampleCommand;

class ExampleServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('package-example')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_my_models_table')
            ->hasCommand(ExampleCommand::class);
    }

    public function packageRegistered()
    {
        Route::macro('example', function (string $baseUrl='example'){
            Route::prefix($baseUrl)->group(function (){
                Route::get('/', [MyController::class, 'index']);
            });

        });
        // we register our routes here, and as a side note,
        // our routes can be registered at any place in your app


    }
}
