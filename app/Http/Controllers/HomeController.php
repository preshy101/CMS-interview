<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Post;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return view('home', [
            'featureed_posts' => Post::published()->featured()->latest('published_at')->take(3)->get(),
            'latest_posts' => Post::published()->latest('published_at')->take(9)->get(),
        ]);
    }
}
