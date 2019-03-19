<?php

use Illuminate\Database\Seeder;
use App\Models\Topic;

class TopicsTableSeeder extends Seeder
{
    public function run()
    {
        // 所有用户 ID 数组
        $user_ids = \App\Models\User::all()->pluck('id')->toArray();

        // 所有分类 ID 数组
        $category_ids = \App\Models\Category::all()->pluck('id')->toArray();

        // 获取 Faker 实例
        $faker = app(Faker\Generator::class);

        $topics = factory(Topic::class)->times(1000)->make()->each(function ($topic, $index) use ($user_ids, $category_ids, $faker) {
            $topic->user_id = $faker->randomElement($user_ids);
            $topic->category_id = $faker->randomElement($category_ids);
        });

        Topic::insert($topics->toArray());
    }

}

