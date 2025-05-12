<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $posts=Post::with('images')->latest()->paginate(9);
        $gratest_posts_views=post::orderby('num_of_views','desc')->limit(3)->get();
        return view('frontend.index',compact('posts','gratest_posts_views'));
        // return $posts;
    }
}
