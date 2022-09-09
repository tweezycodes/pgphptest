<?php

namespace Database\Factories;

use App\Models\{User, Comment};
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'comment'          => $this->faker->sentence,
            'user_id'          => User::factory()->create()->id,
        ];
    }
}