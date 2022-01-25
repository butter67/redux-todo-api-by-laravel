<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    public function index(Request $request)
    {
        $contents = Content::all();
        // dd($contents);

        return view('welcome', compact('contents'));
        // return view('welcome', compact('content'));
    }

    public function save(Request $request)
    {
        $post = new Content();
        $post->content = $request['content'];
        $post->save();

        return redirect('/');
    }

    // public function postTodo(Request $request)
    // {
    //     $post = new Content;
    //     $post->content = $request->content;
    //     $post->completed = false;
    //     $post->save();
    //     return $post;
    // }
}
