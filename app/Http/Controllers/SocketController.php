<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use LRedis;


class SocketController extends Controller
{
    public function __construct()
	{
		$this->middleware('guest');
	}
	public function index()
	{
		return view('socket');
	}
	public function writeMessage()
	{
		return view('write-message');
	}
	public function sendMessage(Request $request){
		$redis = LRedis::connection();
		$redis->publish('message', $request->message);
		return redirect()->route('socket.write.message');
	}
}
