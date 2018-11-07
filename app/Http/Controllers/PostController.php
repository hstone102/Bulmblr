<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
//use App\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    //

    public function index()
    {

    }
    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $post = new \App\post;
        $post->name = $request->input('name');
        $post->title = $request->input('title');
        $post->post = $request->input('post');
        Auth::user()->posts()->save($post);
        $request->session()->flash('status', "{$post->title} has been posted!");
        return redirect()->route('home');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
      return view('posts.show', compact('post'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
    }
}
