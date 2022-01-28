<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use Illuminate\Support\Facades\Auth;

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
        $post = $request->all();
        // dd(Auth::id());

        Content::insert(['content' =>$post['content'],'completed' => false]);
        return redirect('/');
        // $post = new Content();
        // $post->content = $request['content'];
        // $post->save();

        // return redirect('/');
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
