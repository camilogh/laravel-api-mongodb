<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code'  => $this->faker->numberBetween(1000,5000),
            'title' => $this->faker->text(25),
            'name'  => $this->faker->text(200),
            'price' => $this->faker->numberBetween(100,50000)
        ];
    }
}
