<?php

namespace App\Http\Controllers;

use App\Message;

class PagesController extends Controller
{
    public function home()
    {

        $messages = Message::latest()->paginate(10);

        return view('welcome', [
            'messages' => $messages,
        ]);
    }
}
