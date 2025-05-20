<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Barang>
 */
class BarangFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => $this->faker->word(),
            'deskripsi' => $this->faker->sentence(),
            'stok' => $this->faker->numberBetween(10, 100),
            'harga' => $this->faker->randomFloat(2, 1000, 100000),
        ];
    }
}
