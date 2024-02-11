<?php

namespace App\Http\Controllers;

use App\Events\TestWebSocket;
use Illuminate\Broadcasting\Broadcasters\PusherBroadcaster;
use Illuminate\Http\Request;
use Pusher\Pusher;
use Pusher\PusherException;

class SocketController extends Controller
{
    public function connect(Request $request){
        echo "ok";
        broadcast(new TestWebSocket);
    }
}
