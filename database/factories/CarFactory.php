<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Car;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    protected $model = Car::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'brand' => $this->faker->name(),
            'model' => $this->faker->name(),
            'year' => $this->faker->year($min='1900', $max = 'now'),
            'max_speed' => $this->faker->numberBetween($min = 50, $max = 300),
            'is_automatic' => $this->faker->boolean($chanceOfGettingTrue = 50),
            'engine' => $this->faker->randomElement(['petroleum', 'diesel', 'electric','hybrid']),
            'number_of_doors' =>$this->faker->numberBetween($min = 2, $max = 7)
        ];
    }
}


    