<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Entry;
class UserController extends Controller
{
    public function show(User $user)
    {
        $entries = Entry::where('user_id', $user->id)->get();
        return view('users.show', compact('user', 'entries'));
    }
}
