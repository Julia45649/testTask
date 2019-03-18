<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Session;


class UsersController extends Controller
{
    public function store(Request $request){
        $userData=$request->data;
        $status = 500;
        if ($userData['username'] == 'test' && $userData['password'] == 'test') {
//            Session::flash('message', 'success');
            $status = 200;
        } elseif ($userData['username'] != 'test' || $userData['password'] != 'test') {
//            Session::flash('message', 'invalid data');
            $status = 400;
        } else {
//            Session::flash('message', 'login_warning');
        }
        return response()->view('auth.login', [], $status);
    }
}
