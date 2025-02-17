<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Like;

class CategoryController extends Controller
{
    // public function __construct() {
    //     $this->middleware(['auth']);
    // }

    public function index() {

        $posts = Post::paginate(8);

        return view('categories', [
            'posts' => $posts
        ]);
    }

    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}

