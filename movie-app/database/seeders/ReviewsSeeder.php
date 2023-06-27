<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
            'film' => '',
            'user' => '',
            'rating' => '',
            'review' => '',
            'tahun' => '',

        ]);

        Review::create([
            'film' => '',
            'user' => '',
            'rating' => '',
            'review' => '',
            'tahun' => '',

        ]);

        Review::create([
            'film' => '',
            'user' => '',
            'rating' => '',
            'review' => '',
            'tahun' => '',

        ]);

        Review::create([
            'film' => '',
            'user' => '',
            'rating' => '',
            'review' => '',
            'tahun' => '',

        ]);

        Review::create([
            'film' => '',
            'user' => '',
            'rating' => '',
            'review' => '',
            'tahun' => '',

        ]);
    }
}