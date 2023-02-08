<?php

namespace Database\Factories;

use App\Models\Owners;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {        
        $owners = Owners::all()->pluck('id')->toArray();
        return [
            'reg_number' => 'T3S52',
            'model' => 'A64',
            'user_id' => 1
        ];
    }
}
