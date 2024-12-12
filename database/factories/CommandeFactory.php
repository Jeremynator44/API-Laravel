<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commande>
 */
class CommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(){
        return [
            'id_client' => fake()->numberBetween($min = 1, $max = 1600),
            'id_produit' => fake()->numberBetween($min = 1, $max = 1500),
            'quantite' => $this->faker->numberBetween($min = 1, $max = 50),
            'date' => $this->faker->numberBetween(),
        ];
      }
}