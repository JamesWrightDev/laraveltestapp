<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth', ['except' => ['index','show']]);
	}
	public function index()
	{
		//Fetch All Posts (latests method)
		$posts = Post::latest()->get();
		//Compact will take the data and put it in an arry object
		return view('posts.index',compact('posts'));
	} 
	// Shows post corrolating to the URI(1,2,3)
	public function show(Post $post)
	{
		return view('posts.show',compact('post'));
	}
	public function create()
	{
		return view('posts.create');
	}
	public function store()
	{
		$this->validate(request(),[
		 'title'=>'required',
		 'body'=>'required'
		]);
		Post::create([
		'title' => request('title'),
		'body' => request('body'),
		'user_id' => auth()->id()
		]);
		return redirect('/');
	}
}
