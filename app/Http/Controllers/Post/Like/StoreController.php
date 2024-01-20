<?php

namespace App\Http\Controllers\Post\like;

use App\Http\Controllers\Controller;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(Post $post)
    {

        auth()->user()->likedPosts()->toggle($post->id);
        return redirect()->back();
    }
}
