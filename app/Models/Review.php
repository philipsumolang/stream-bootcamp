<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    // $table->foreignId('user_id')->constrained('users');
    // $table->foreignId('movie_id')->constrained('movies');
    // $table->integer('star');
    // $table->text('review');
    // $table->unique(['user_id', 'movie_id']);
    protected $table = 'reviews';

    protected $fillable = [
        'user_id',
        'movie_id',
        'star',
        'review'
    ];
}
