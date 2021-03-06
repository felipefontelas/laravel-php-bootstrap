<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index(){
        return view('posts.index');
    }
    public function show(){
        return view('posts.show');
    }
    public function pantera(){
        return view('posts.pantera');
    }
    public function create(){
        return view('posts.create');
    }

    /**
     *
     */
    public function store(){
        //dd(request(['title', 'body']));
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);
        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);
//        $post->title = request('title');
//        $post->body = request('body');
//
//        $post->save();
        return redirect('/');



    }
}
