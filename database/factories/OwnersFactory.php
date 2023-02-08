<?php

namespace Database\Factories;

use App\Models\Owners;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owners>
 */
class OwnersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'name' => $this->faker->name,
            'surname' => $this->faker->name,
        ];
    }
}
