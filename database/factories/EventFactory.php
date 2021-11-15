<?php

namespace Database\Factories;

use App\Models\event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->randomElement(["звонок", "собеседование", "уточнение"]),
            'date_event'=>$this->faker->dateTimeBetween('-1 years'),
            'user_id'=>$this->faker->randomDigit(50),
            'description'=> $this->faker->paragraph(100, true)
        ];
    }
}
