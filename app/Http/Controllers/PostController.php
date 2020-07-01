<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\If_;
use Symfony\Component\Console\Input\Input;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();

        return view ('post.index', compact('posts'));
    }

    public function store(Request $request, Post $post){
        $data = $request->validate([
            'title'=>'required|min:20',
            'content'=>'required'
        ]);

        $post->title = $request->input('title');
        $post->content= $request->input('content');
        $post->save();


        return redirect()->back();
    }
}
