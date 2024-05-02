<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function overview()
    {
        $posts = Post::all();

        return view('blog.overview', [
            'posts' => $posts,
        ]);
    }

    public function addView()
    {
        return view('blog.create');
    }

    public function addAction (Request $request)
    {
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'user_id' => auth()->id(),
        ]);

        return redirect(route('blog.overview'))->with(['message' => 'Post created successfully!']);
    }
}
