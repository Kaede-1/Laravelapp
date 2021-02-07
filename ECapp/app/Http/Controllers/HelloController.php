<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class HelloController extends Controller
{
    public function index(Request $request){
        $items = \DB::select('select * from people');
        return view('hello.index', ['items' => $items]);
    }
    public function getAuth(Request $request){
        $param = ['message' => 'ログインしてください。'];
        return view('hello.auth', $param);
    }

    public function postAuth(Request $request){
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            $msg = 'ログインしました。(' . Auth::user()->name . ')';
        } else {
            $msg ='ログインに失敗しました。';
        }
        return view('hello.auth', ['message' => $msg]);
    }
}
