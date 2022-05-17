<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'last_name' => $this->faker->lastName(),
            'type_person_id' => $this->faker->numberBetween(1, 2),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->numerify('9########'),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'active' => $this->faker->boolean(),
        ];
    }
}
