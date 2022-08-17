<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i < 21; $i++)
        DB::table('articles')->insert([
            'title' => 'Article '. $i,
            'subtitle' => 'Good subtitle for Article ' . $i,
            'author' => 'Kate',
            'image' => 'img/home-bg.jpg',
            'description' => 'Description for Article ' . $i,
        ]);
    }
}
