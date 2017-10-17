<?php

namespace App\Http\Controllers;

use App\Message;

class PagesController extends Controller
{
    public function home()
    {

        $messages = Message::all();

        return view('welcome', [
            'messages' => $messages,
        ]);
    }
}
