<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
        // dd('1');
        $posts = Post::all();

        return view('posts.index', compact('posts')); 
    }

    public function create()
    {
        $post = new Post();
        return view('posts.create', compact('post'));
    }

    /**
     * Store post
     */
    public function store(Request $request)
    {
        $request-> validate([
            'title'=> 'required',
            'description'=> 'required'
        ]);
        Post::create($request->input());
        // return 
        return redirect()->action('PostController@index');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request-> validate([
            'title'=> 'required',
            'description'=> 'required'
        ]);
        $post->update($request->input());
        return redirect()->action('PostController@index');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->action('PostController@index');
    }
}