<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    //
    public function index()
    {
        return view('chat_forum');
    }

    public function sendMessage(Request $request)
    {
        // Lógica para manejar el envío de mensajes, almacenar en la base de datos, etc.
        
    }
}
