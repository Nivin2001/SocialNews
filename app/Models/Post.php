<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $guarded=[];
    public function category()
    {
        return $this->belongsTo('Category::class','Category_id');
    }
    public function user()
    {
        return $this->belongsTo('User::class','user_id');
    }
    public function comments()
    {
        return $this->hasMany('Comment::class','post_id');
    }
    public function images()
    {
        return $this->hasMany('Image::class','post_id');
    }
    public function sluggable():array
    {
        return[
        'slug' =>[
        'source'=>'title',
        ]
        ];
    }

}
