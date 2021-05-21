<?php

namespace App\Http\Controllers;

use App\Events\MessageCreated;
use App\Mail\MessageMail;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store(Request $request)
    {
       $data = $request->validate([
        'email' => ['email','required'],
        'name' => ['min:5','required'],
        'message' => ['min:5','required'],
       ]);
       
      $message = Message::create($data);

       event(new MessageCreated($message));
       /* Mail::to('nahianhasan161@gmail.com')->send(new MessageMail($data)); */

       return back()->with('message','Success: Your Message has been Sent');
    }
}
