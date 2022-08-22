<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

class RegisterController extends Controller
{
    public function index(){


            return view('register');
    }

    public function check(){

    try{
        $validate = request()->validate([

            'name' => 'required',
            'username' => ['required',Rule::unique('users','username')],
            'email' => ['required',Rule::unique('users','email'),'email'],
            'password' => 'required'

        ]);
        $validate['password'] = bcrypt($validate['password']); 
        $user = User::create($validate);
        auth()->login($user);
        return redirect('/');

    }catch(\Exception $e){

        return throw ValidationException::withMessages(['errors' => $e->getMessage()]);
    }
    }
}
