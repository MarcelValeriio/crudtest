<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\PostRequest;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

    public function index(): View
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function create(): View
    {
        return view('post.create');
    }

    public function store(PostRequest $request): RedirectResponse
    {

        Post::create($request->all());
        return redirect()->route('post.index')->with('success', 'Post Created');
    }

    public function show(Post $post): View
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post): View
    {
        return view('post.edit', compact('post'));
    }

    public function update(PostRequest $request, Post $post): RedirectResponse
    {
        $post->update($request->all());
        return redirect()->route('post.index')->with('success', 'Post has been UPDATED');
    }

    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();
        return redirect()->route('post.index')->with('danger', 'Post has been DELETED');
    }
}
