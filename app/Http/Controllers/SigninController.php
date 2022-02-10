<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SigninController extends Controller
{
    public function index(Request $request)
    {

        if(!$token = auth()->attempt($request->only('email','password'))){

            return response()->json(null,401);
        }

        return response()->json(['token'=>$token],200);
    }

}
