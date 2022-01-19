<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'content', 'title', 'preview_image', 'main_image'];
     protected $table = 'posts';
     protected $quarded = false;

}
