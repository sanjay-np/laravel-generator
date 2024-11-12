<?php

namespace SanjayNp\LaravelGenerator\Tests\Feature;

use SanjayNp\LaravelGenerator\Tests\TestCase;

class MakeServiceCommandTest extends TestCase
{
    /** @test */
    public function it_can_create_a_service()
    {
        $serviceClass = 'UserService';
        $this->artisan('make:service', ['name' => $serviceClass])
            ->assertExitCode(0);

        $this->assertFileExists(
            app_path("Services/{$serviceClass}.php")
        );

        $this->assertTrue(str_contains(
            file_get_contents(app_path("Services/{$serviceClass}.php")),
            'namespace App\Services;'
        ));
    }
}