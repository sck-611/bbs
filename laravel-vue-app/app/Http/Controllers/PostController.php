<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Post;
class PostController extends Controller
{
    //
    public function index(){
        return view('bbs',['posts'=>Post::all()->sortByDesc("created_at")]);
    }
    public function create(Request $request){
        $post = new Post;
        $post->body = $request->honbun;
        $post->user_id = Auth::id();
        $post->save();
        return redirect('/');
    }
}
