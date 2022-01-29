<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(7)->create();
        Task::factory(5)->create(['user_id' => rand(1, 7)]);
        Task::factory(5)->create(['user_id' => rand(1, 7)]);
        Task::factory(5)->create(['user_id' => rand(1, 7)]);
        Task::factory(5)->create(['user_id' => rand(1, 7)]);
        Task::factory(5)->create(['user_id' => rand(1, 7)]);
        Task::factory(5)->create(['user_id' => rand(1, 7)]);
        Task::factory(5)->create(['user_id' => rand(1, 7)]);
        Task::factory(5)->create(['user_id' => rand(1, 7)]);
    }
}
