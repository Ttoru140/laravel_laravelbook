<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3), // Random book title
            'author' => $this->faker->name(), // Random author name
            'isbn' => $this->faker->isbn13(), // Random
            'price' => $this->faker->randomFloat(2,10,500),
            'stock' => $this->faker->numberBetween(5,100),
        ];
    }
}
