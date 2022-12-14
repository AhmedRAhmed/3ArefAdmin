<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jobs>
 */
class JobsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $Type = $this->faker->randomElement(['Employee','Worker','Company']);
        return [
            'JobName' =>$this->faker->jobTitle(),
            'JobType' =>$Type
        ];
    }
}
