<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Course;
use App\Models\Post;
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
        User::create([
            'name'              => 'Code Codero',
            'email'             => 'code@dev.com',
            'email_verified_at' => now(),
            'password'          => bcrypt(123456),
        ]);
        User::factory(5)->create();
        Category::factory(10)->create();
        Course::factory(20)->create();
        Post::factory(100)->create();
    }
}
