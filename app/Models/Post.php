<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'content', 'title', 'preview_image', 'main_image'];
     protected $table = 'posts';
     protected $quarded = false;

     public function tags()
     {
         return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
     }


}
