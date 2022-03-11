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
    public function definition()
    {
        $price=[499,699,1299];
        return [
            'name'=>$this->faker->name(),
            'price'=>$price[rand(0,count($price)-1)]
            //
        ];
    }
}
