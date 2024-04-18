<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   public function login(Request $request)
   {
       $credentials = $request(['email','password']);
       if (!auth()->attempt($credentials)) {
           return response()->json(['message' => 'Authorized'],401);
       }
       $accestoken = auth()->user()->createToken('authToken')->accessToken;
       return response()->json(['access_token' => $accestoken]);
   }
}
