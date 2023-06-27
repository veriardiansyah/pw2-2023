<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Movie::create([
            'judul' => 'The Avenger',
            'poster' => 'image.png',
            'genre_id' => 1,
            'negara' => 'USA',
            'tahun' => '2012',
            'rating' => '9.8'
       ]);

       Movie::create([
        'judul' => 'Spider-Man',
        'poster' => 'image.png',
        'genre_id' => 3,
        'negara' => 'USA',
        'tahun' => '2002',
        'rating' => '9'
       ]);

       Movie::create([
          'judul' => 'Spider-Man: Into The Spider-Verse',
          'poster' => 'image.png',
          'genre_id' => 2,
          'negara' => 'USA',
          'tahun' => '2018',
          'rating' => '8.4'
       ]);

       Movie::create([
          'judul' => 'Batman Begins',
          'poster' => 'image.png',
          'genre_id' => 4,
          'negara' => 'USA',
          'tahun' => '2005',
          'rating' => '8.8'
       ]);

       Movie::create([
          'judul' => 'Joker',
          'poster' => 'image.png',
          'genre_id' => 5,
          'negara' => 'USA',
          'tahun' => '2019',
          'rating' => '9'
       ]);
   
   
    }
}