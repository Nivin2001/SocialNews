<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date = fake()->dateTimeThisYear()->format('Y-m-d H:i:s');
        return [
            //
            'title'=>fake()->sentence(3),
             'slug' => Str::slug(fake()->sentence(3)),
            'desc'=>fake()->paragraph(5),
            'status' => fake()->randomElement([0, 1]),  // استخدام randomElement بدلاً من rand
            'comment_able' => fake()->randomElement([0, 1]),
            'num_of_views' => fake()->numberBetween(0, 100),
            'user_id'=>User::inRandomOrder()->first()->id,
            'Category_id'=>Category::inRandomOrder()->first()->id,
            'created_at'=>$date,
            'updated_at'=>$date,
        ];
    }
}
