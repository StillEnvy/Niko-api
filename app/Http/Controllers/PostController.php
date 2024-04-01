<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->paginate(5);
        return view('post.list', compact('posts'));
    }
}
