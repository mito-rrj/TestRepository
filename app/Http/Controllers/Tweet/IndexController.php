<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        // return view('tweet.index', ['name' => 'viewに返す値だよ']);
        // return view('tweet.index')
        //     ->with('name', 'viewに返す値だよ')
        //     ->with('version', 'viewに返す値2個目だよ');
        $tweets = Tweet::orderBy('created_at', 'DESC')->get();
        return view('tweet.index')
            ->with('tweets', $tweets);
    }
}