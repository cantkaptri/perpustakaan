<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    Public function index()
    {
            $posts = Post::all();
            return view('posts.index', compact('posts'));
    }
}
