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


    $client = new \GuzzleHttp\Client();
    $res = $client->get('https://auth-zix.herokuapp.com/api/auth/login',[

        'query' => [

            'username' => 'ziadaligom3a',
            'password' => 'ziadaligom3a'
        ]

    ]);
    dd($res);
    echo $res->getStatusCode(); // 200
    echo $res->getBody(); //

      
    }
}
