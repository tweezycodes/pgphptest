<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\{ User, Comment };

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->userSeeder();
    }

    private function userSeeder()
    {
        $user = User::factory()->create();
        Comment::factory()->create(['user_id' => $user->id]);
    }
}
