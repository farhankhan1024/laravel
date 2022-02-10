<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

     public function profile()
    {
        return response()->json(auth()->user());
    }
}
