<?php

namespace SanjayNp\LaravelGenerator\Tests\Feature;

use SanjayNp\LaravelGenerator\Tests\TestCase;

class MakeActionCommandTest extends TestCase
{
    /** @test */
    public function it_can_create_an_action()
    {
        $actionClass = 'CreateUserAction';
        $this->artisan('make:action', ['name' => $actionClass])
            ->assertExitCode(0);

        $this->assertFileExists(
            app_path("Actions/{$actionClass}.php")
        );

        $this->assertTrue(str_contains(
            file_get_contents(app_path("Actions/{$actionClass}.php")),
            'namespace App\Actions;'
        ));
    }
}