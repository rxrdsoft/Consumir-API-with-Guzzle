<?php

namespace App\Http\Controllers;

use App\Api\Posts;
use Illuminate\Http\Request;
use Carbon\Carbon;



class PostController extends Controller
{
    protected $posts;

    public function __construct(Posts $obj)
    {
        $this->posts= $obj;
    }
    public function index()
    {   
        $fecha=Carbon::now();
        $posts=$this->posts->all();
        return view('posts.index',['posts'=>$posts,'fecha'=>$fecha]);
    }

    public function show($id)
    {
        $post=$this->posts->getId($id);
        return view('posts.show',['post'=>$post]);
    }
}
