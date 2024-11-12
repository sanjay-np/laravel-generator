<?php

namespace SanjayNp\LaravelGenerator\Tests;

use SanjayNp\LaravelGenerator\LaravelGeneratorServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [
            LaravelGeneratorServiceProvider::class,
        ];
    }
}
