<?php

namespace SanjayNp\LaravelGenerator;

use Illuminate\Support\ServiceProvider;
use SanjayNp\LaravelGenerator\Commands\MakeActionCommand;
use SanjayNp\LaravelGenerator\Commands\MakeServiceCommand;
use SanjayNp\LaravelGenerator\Commands\MakeTraitCommand;

class LaravelGeneratorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeActionCommand::class,
                MakeServiceCommand::class,
                MakeTraitCommand::class,
            ]);
        }
    }
}
