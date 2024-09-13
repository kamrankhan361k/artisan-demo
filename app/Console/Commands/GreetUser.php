<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GreetUser extends Command
{
    
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'greet:user {name} {--uppercase}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Greet a user with their name';

    /**
     * Execute the console command.
     */
    public function handle()
    {
          // Retrieve the 'name' argument
          $name = $this->argument('name');

        // Check if the --uppercase option is passed
        if ($this->option('uppercase')) {
            $name = strtoupper($name);
        }

        $this->info("Hello, $name! Welcome to Artisan Console!");
    
    }
}
