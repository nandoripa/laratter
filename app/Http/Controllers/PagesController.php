<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function home()
    {

        $messages = [
            [
                'id' => 1,
                'content' => 'This is my first message',
                'image' => 'http://lorempixel.com/600/338?1'
            ],
            [
                'id' => 2,
                'content' => 'My second message',
                'image' => 'http://lorempixel.com/600/338?2'
            ],
            [
                'id' => 3,
                'content' => 'This is my third message',
                'image' => 'http://lorempixel.com/600/338?2'
            ],
            [
                'id' => 4,
                'content' => 'My last message',
                'image' => 'http://lorempixel.com/600/338?4'
            ]
        ];

        return view('welcome', [
            'messages' => $messages,
        ]);
    }
}
