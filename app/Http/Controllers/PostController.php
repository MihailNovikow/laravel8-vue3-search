<?php
namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Facades\App\Repository\Posts;
class PostController extends Controller
{
    public function index()
    {   
        return view('search');
    }
    public function search(Request $request)
    {
        $posts=Post::where('title',$request->keywords)->get();
        return response()->json($posts);
        
    }
}