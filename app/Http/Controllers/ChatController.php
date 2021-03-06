<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
    public function chat()
    {
      return view ('chat');
    }
    public function send(request $request)
    {
      $user = User::find(Auth::id);
      event( new ChatEvent( $request->message , $user));
    }
}
