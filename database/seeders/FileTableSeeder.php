<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('files')->insert([
            'slug' => 'example-jpg',
            'path' => 'examples/example.jpg',
            'ext' => 'jpg',
            'size' => 100,
            'life_time' => null,
            'created_at' => NOW(),
            'updated_at' => NOW()
        ]);
    }
}
