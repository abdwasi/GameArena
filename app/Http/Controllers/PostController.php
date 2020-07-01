<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\If_;

class PostController extends Controller
{
    public function index(){
        $posts = \App\Post::all();

        return view ('post.index', compact('posts'));
    }

    public function store(){
        $data = request()->validate([
            'title'=>'required|min:20',
            'content'=>'required'
        ]);

        \App\Post::create($data);

        return redirect()->back();
    }
}
