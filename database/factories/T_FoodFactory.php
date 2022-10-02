<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\T_Food>
 */
class T_FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'description'=>fake()->word(),
            'unit_price'=>fake()->lexify(),
            'promotion_price'=>fake()->lexify(),
            'produced_on'=>fake()->date(),
            'image'=>rand(1,8).'.jpg',
        ];
    }
}