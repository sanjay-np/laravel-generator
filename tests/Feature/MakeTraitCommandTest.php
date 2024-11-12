<?php
namespace SanjayNp\LaravelGenerator\Tests\Feature;

use SanjayNp\LaravelGenerator\Tests\TestCase;

class MakeTraitCommandTest extends TestCase
{
    /** @test */
    public function it_can_create_a_trait()
    {
        $traitClass = 'Searchable';
        $this->artisan('make:trait', ['name' => $traitClass])
            ->assertExitCode(0);

        $this->assertFileExists(
            app_path("Traits/{$traitClass}.php")
        );

        $this->assertTrue(str_contains(
            file_get_contents(app_path("Traits/{$traitClass}.php")),
            'namespace App\Traits;'
        ));
    }
}
