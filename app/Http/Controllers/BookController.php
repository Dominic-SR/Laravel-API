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
        return response()->json(Books::all(), 200);
    }

    // POST /api/posts
    public function store(Request $request)
    {
        $request->validate([
            'book_name' => 'required',
            'book_desc' => 'required'
        ]);

        $post = Books::create($request->only(['book_name','book_desc']));
        return response()->json(["status"=>true, 'message'=>'created successfully !', 'data'=>$post], 201);
    }

    // GET /api/posts/{id}
    public function show($id)
    {
        $post = Books::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }
        return response()->json($post, 200);
    }

    // PUT /api/posts/{id}
    public function update(Request $request, $id)
    {
        $post = Books::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        $request->validate([
            'book_name' => 'required',
            'book_desc' => 'required'
        ]);

        $post->update($request->only(['book_name','book_desc']));
        return response()->json(["status"=>true, 'message'=>'Updated successfully !'],$post, 200);
    }

    // DELETE /api/posts/{id}
    public function destroy($id)
    {
        $post = Books::find($id);
        if (!$post) {
            return response()->json(['message' => 'Post not found'], 404);
        }

        $post->delete();
        return response()->json(['message' => 'Post deleted successfully'], 200);
    }
}
