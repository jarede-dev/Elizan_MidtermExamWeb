<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ElizanSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('laravel_features')->insert([
            ['features' => 'Model', 'description' => 'Represents the data layer; uses Eloquent ORM to interact with database tables'],
            ['features' => 'View', 'description' => 'Handles presentation; Blade template files in resources/views'],
            ['features' => 'Controller', 'description' => 'Intermediary between Model and View; handles HTTP requests and business logic'],
            ['features' => 'Routes', 'description' => 'Maps URL endpoints to controllers; configured in routes/web.php and routes/api.php'],
            ['features' => 'Middleware', 'description' => 'Filters HTTP requests; handles auth, logging, CORS before reaching the controller'],
            ['features' => 'Blade Templates', 'description' => 'Laravels templating engine with shortcuts for inheritance, conditionals, loops'],
            ['features' => 'Migrations', 'description' => 'Version control for database schema; create/modify/rollback tables using PHP'],
            ['features' => 'Seeders', 'description' => 'Populates database with sample/default data for testing and development'],
            ['features' => 'Database', 'description' => 'The database is a flexible, secure, and easy-to-use system that allows you to store, manage, and retrieve application data using Eloquent ORM or SQL'],
            ['features' => 'Eloquent ORM', 'description' => 'Eloquent ORM is Laravels built-in, intuitive ActiveRecord implementation that allows developers to interact with database tables using PHP syntax and object-oriented models instead of writing raw SQL.']
        ]);
    }
}

