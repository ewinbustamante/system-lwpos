<?php

namespace Database\Factories;

use App\Models\Category;
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
        $cost = $this->faker->numberBetween(10, 1000);

        return [
            'name'          =>  $this->faker->word(),
            'barcode'       =>  $this->faker->isbn13(),
            'cost'          =>  $cost,
            'price'         =>  $cost * (1.4),
            'stock'         =>  $this->faker->numberBetween(10, 100),
            'alert'         =>  $this->faker->numberBetween(10, 20),
            'image'         =>  $this->faker->image(null, 200, 150, null, true, true, 'something', true, 'jpg'),
            'category_id'   =>  $this->faker->randomElement(Category::pluck('id'))
        ];
    }
}
