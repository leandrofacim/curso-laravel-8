<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePost;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('admin.posts.index', ['posts' => $posts]);
    }

    public function create()
    {
        return view('admin.posts.create');
    }

    public function store(StoreUpdatePost $request)
    {
        $data = $request->all();
        Post::create($data);

        return redirect()->route('posts.index');
    }

    public function show($id)
    {
        $post = Post::where('id', $id)->first();
        // $post = Post::find($id);
        if (!$post) 
            return redirect()->route('posts.index');
        

        return view('admin.posts.show', ['post' => $post]);
    }

    public function destroy($id)
    {
        if (!$post = Post::find($id))
            return redirect()->route('posts.index');
        
        $post->delete();

        return redirect()
            ->route('posts.index')
            ->with('message', 'Post deletado com sucesso!');
    }
}
