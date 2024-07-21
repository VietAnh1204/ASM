<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'Latest Tech Trends',
            'content' => 'Detailed content about the latest tech trends...',
            'view_count' => 150,
            'published_at' => now(),
            'category_id' => 1,
            'user_id' => 1
        ]);
    }
}
