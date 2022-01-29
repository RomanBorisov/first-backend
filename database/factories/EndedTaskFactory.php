<?php

namespace Database\Factories;

use App\Models\EndedTask;
use Illuminate\Database\Eloquent\Factories\Factory;

class EndedTaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EndedTask::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        return [
            'end_time' => $this->faker->dateTimeThisMonth,
        ];
    }
}
