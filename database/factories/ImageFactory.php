<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
//            'user_id' => User::factory(),
            'post_id' => Post::factory(),
            'title' => $this->faker->name,
            'path' => $this->faker->unique()->image(storage_path('app/public/images'), 400, 300, null, false),
        ];
    }
}
