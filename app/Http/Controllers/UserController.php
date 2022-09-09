<?php

namespace App\Http\Controllers;
use App\Models\{User, Comment};
use App\Http\Requests\UserCommentRequest;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        $user->comments;
        return view('main', compact('user'));
    }

    public function storeComment(UserCommentRequest $request)
    {
        if(USER::PASSWORD == $request->password) {
            Comment::create(['user_id' => $request->id, 'comment' => $request->comment]);
            return response()->json(['OK.'], 200);
        }
        return response()->json(['invalid password.'], 401);
    }
}
