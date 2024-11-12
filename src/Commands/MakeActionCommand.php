<?php

namespace SanjayNp\LaravelGenerator\Commands;

use Illuminate\Console\GeneratorCommand;

class MakeActionCommand extends GeneratorCommand
{
    protected $name = 'make:action';
    protected $description = 'Create a new action class';
    protected $type = 'Action';

    protected function getStub()
    {
        return __DIR__ . '/../Stubs/action.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Actions';
    }
}
