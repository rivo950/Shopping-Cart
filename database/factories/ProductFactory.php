<?php

namespace Database\Factories;

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
    public function definition(): array
    {
        return [
                "name"=>$this->faker->unique()->name(),
                "details"=>$this->faker->sentence(),
                "description"=>$this->faker->paragraph(),
                "brand"=>$this->faker->company(),
                "price"=>$this->faker->randomFloat(2, 10, 100),
                "shipping_cost"=>$this->faker->randomFloat(2, 5, 20),
                "image_path"=>$this->faker->imageUrl(640, 480, 'product'),
        ];
    }
}
