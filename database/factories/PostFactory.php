<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->text(100);
        return [
            'author_id' => Author::factory(),
            'title' => $title,
            'slug' => Str::slug($title),
            'place' => $this->faker->city,
            'body' => $this->faker->realText(),
            'source' => $this->faker->url,
        ];
    }
}