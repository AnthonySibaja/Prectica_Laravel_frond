<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    //

    public function show(Post $post){
        
       // Post::findOrFail($id);
        return view('blog-post', ['post'=>$post]);
    }
    public function create(){
        
      
        return view('admin.posts.create');
     }
     public function store(){
        
      
        //dd(request()->all());

        auth()->user();
     }


}
