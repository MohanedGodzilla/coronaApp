<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class clientController extends Controller
{

    /*  public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register']]);
    }*/
    
    public function getUsers(){
        $user = User::all();
        return response()->json($user);
    }
}
