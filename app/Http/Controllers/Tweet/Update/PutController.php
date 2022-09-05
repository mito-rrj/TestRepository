<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use App\Http\Requests\Tweet\UpdateRequest;

class PutController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateRequest $request)
    {
        $tweet = Tweet::where('id', $request->id())
            ->firstOrFail();
        $tweet->content = $request->tweet();
        $tweet->save();
        // dd($tweet);
        return redirect('tweet.update.index', ['tweetId' => $tweet->id])
            ->with('feedback.success', "つぶやきを編集しました");
    }
}