<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Post::truncate();
        Category::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, placeat?',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam totam eius excepturi repellendus tempora quae, accusantium nemo eos et, distinctio dolorum sed inventore, ipsum quis nostrum dolorem unde molestias veritatis aspernatur earum laboriosam libero labore. Dolorum eum, eos corrupti aut repudiandae ea aperiam officia asperiores non assumenda sapiente adipisci eaque.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, placeat?',
            'body' => '<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Magnam totam eius excepturi repellendus tempora quae, accusantium nemo eos et, distinctio dolorum sed inventore, ipsum quis nostrum dolorem unde molestias veritatis aspernatur earum laboriosam libero labore. Dolorum eum, eos corrupti aut repudiandae ea aperiam officia asperiores non assumenda sapiente adipisci eaque.</p>'
        ]);
    }
}