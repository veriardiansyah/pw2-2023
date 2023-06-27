<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    use HasFactory;

    protected $fillable = ['film', 'user', 'rating', 'review', 'tahun'];

    public function getAllReviews()
    {
        return $this->reviews;
    }
   
}