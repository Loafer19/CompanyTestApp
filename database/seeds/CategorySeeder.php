<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Category::class, 5)->create()->each(function ($category) {
            $category->posts()->attach(
                factory(App\Post::class, 2)->create()
            );

            // childs
            factory(App\Category::class)->create(['parent_id' => $category->id]);
        });
    }
}
