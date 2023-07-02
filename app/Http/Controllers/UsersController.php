<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function accueil(){
        return view('users.accueil');
    }
    
    public function app(){
        return view('layouts.app');
    }

    public function product(){
        return view('users.product');
    }

    public function blog(){
        return view('users.blog');
    }

}
