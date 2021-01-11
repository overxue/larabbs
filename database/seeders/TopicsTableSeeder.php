<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\Reply;

class TopicsTableSeeder extends Seeder
{
    public function run()
    {
        Reply::factory()->times(1000)->create();
    }
}

