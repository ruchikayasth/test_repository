<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }
    
    public function login(Request $request)
    {
        request()->validate([
            'email' => 'required',
            'psw' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (isset($credentials)) {
            // Authentication passed...
            return view('welcome');
        }else{
            return Redirect::to("login")->withSuccess('Oppes! You have entered invalid credentials');
        }        
        echo "<pre>";
        print_r($request->all());
        die('here');
    }
}
