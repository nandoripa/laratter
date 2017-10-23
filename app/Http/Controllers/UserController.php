<?php

namespace App\Http\Controllers;

use App\User;

class UserController extends Controller
{
    public function show($username)
    {
        $user = User::where('username', $username)->first();

        return view('users.show', [
            'user' => $user,
        ]);
    }
}
