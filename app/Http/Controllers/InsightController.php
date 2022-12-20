<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class InsightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array(
            'id' => "posts",
            'posts' => Post::all()
        );
        return view('insight')->with($data);
    }
}
