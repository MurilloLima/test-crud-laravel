<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'profission' => 'Analista de Sistemas',
            'address' => $this->faker->address(),
            'date' => now()
        ];
    }
}
