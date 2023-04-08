<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Project;
use App\Models\Task;
use App\Models\Member;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            ProjectSeeder::class,
        ]);


       

        // Project::factory()->create([
        //     'name' => 'Projet 1',
        //     'description' => 'description 1',
        // ]);

        // User::factory()
        // ->count(50)
        // ->hasPosts(1)
        // ->create();
    }
}
