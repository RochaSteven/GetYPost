<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'description'=>$this->faker->sentence(),
            'followers'=>$this->faker->sentence(),
            'following'=>$this->faker->sentence(),
            
            'user_id'=>$this->faker->randomElement([1,2,3,4,5])
        ];
    }
}
