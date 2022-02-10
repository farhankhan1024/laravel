<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{

    function __construct()
    {

        $this->middleware('auth:api');
    }
    public function index(Request $request)
    {
        
        echo 1;
        

    }
}
