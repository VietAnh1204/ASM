<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('comments')->insert([
            'article_id' => 1,
            'user_id' => 1,
            'comment' => 'Great article!'
        ]);
    }
}
