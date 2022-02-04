<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\User;
use SebastianBergmann\Environment\Console;
use Illuminate\Support\Facades\Auth;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //getAll Contents of Api
        $respo = Content::all();
        // $id = User::all();
        // $id = User::where('id' == 1);
        // $id = $request->user();


        // $id = Auth::user();
        // dd($id);
        // $respo = Content::where('user_id', $id)->get();
        return response($respo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Content;
        $post->content = $request->content;
        $post->completed = false;
        // $post->user_id = auth()->user()->id;
        $post->save();

        $contents = Content::all();
        return $contents;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function reverse(Request $request)
    {
        $id = $request->id;
        $post = Content::find($id);
        $post->completed = false;
        $post->save();

        $contents = Content::all();
        return $contents;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->id;
        $post = Content::find($id);
        $post->completed = true;
        $post->save();

        $contents = Content::all();
        return $contents;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * @param  \Illuminate\Http\Request  $request
     */
    public function destroy(Request $request)
    {
        $id = $request->id;
        $post = Content::find($id);
        $post->delete();

        $contents = Content::all();
        return $contents;
    }
}
