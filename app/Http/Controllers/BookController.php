<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Http\Request;

class BookController extends Controller
{
     // GET /api/posts
    public function index()
    {
        return response()->json(Post::all(), 200);
    }

    // POST /api/posts
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post = Post::create($request->only(['title','content']));
        return response()->json($post, 201);
    }

    // GET /api/posts/{id}
    public function show($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        return response()->json($post, 200);
    }

    // PUT /api/posts/{id}
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        $post->update($request->only(['title','content']));
        return response()->json($post, 200);
    }

    // DELETE /api/posts/{id}
    public function destroy($id)
    {
        $post = Post::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        $post->delete();
        return response()->json(['message' => 'Post deleted successfully'], 200);
    }
}
