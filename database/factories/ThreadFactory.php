<?php

namespace Database\Factories;

use App\Models\Channel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ThreadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'channel_id' => Channel::factory()->create()->id,
            'title' => $this->faker->sentence(),
            'body' => $this->faker->paragraph()
        ];
    }
}
