<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(15, true),
            'slug' => Str::slug(fake()->sentence(15, true), '-'),
            'details' => fake()->paragraphs(25, true),
            'picture' => fake()->imageUrl($width = 640, $height = 480),
            'user_id' => User::inRandomOrder()->first(),
            'created_at' => fake()->dateTimeBetween( '-10 years', 'now', 'Africa/Cairo' ),
        ];
    }
}
