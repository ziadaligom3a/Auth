<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
class LoginController extends Controller
{
    public function index(){


        return view('login');

    }



    public function check(Request $request){


        $response = $request->create('http://127.0.0.1:8000/api/auth/login?','POST',[

            'username' => 'ziadaligom3a',
            'password' => 'ziadaligom3a'
        ]);

        $response1 = Route::dispatch($request);

        return dd($response1);

      
    }
}
