<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence, // Usa 'sentence' para títulos
            'description' => $this->faker->paragraph, // Usa 'paragraph' para descripciones
            'release_date' => $this->faker->date, // Usa 'date' para fechas
            'duration' => $this->faker->numberBetween(60, 180), // Duración entre 60 y 180 minutos
            'genre' => $this->faker->word, // Usa 'word' para género
        ];
    }
}
