<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GreetUserCommandTest extends TestCase
{
    public function test_greet_user_command()
    {
        // Simulate running the command and assert the output
        $this->artisan('greet:user Kamran')
             ->expectsOutput('Hello, Kamran! Welcome to Artisan Console!')
             ->assertExitCode(0);
    }

    public function test_greet_user_command_uppercase()
    {
        // Simulate running the command with --uppercase option
        $this->artisan('greet:user Kamran --uppercase')
             ->expectsOutput('Hello, KAMRAN! Welcome to Artisan Console!')
             ->assertExitCode(0);
    }
}
