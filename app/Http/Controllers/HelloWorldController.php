<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    function helloPost($name, Request $request)
    {
        return response()->json([
            'message' => 'Hello, World!'.$name, 
            'tchau' => $request->foo
        ]);
    }
    function helloPost1($name)
    {
        return response()->json(['message' => 'Olá, World! '.$name]);
    }
}
