<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
public function createUser(Request $request)
{
    $user = new User;
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->save();

    return response()->json($user, 201);
}
public function updateUser(Request $request)
{
    $user = User::find($id);
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->save();

    return response()->json($user, 200);
}
public function deleteUser($id)
{
    $user = User::find($id);
     if ($user) {
         $user->delete();
         return response()->json(null,204);
     } else {
         return response()->json(['message' => 'User not found'], 404);
     }
}
public function authorizeUser(Request $request)
    {
        // Реализуйте здесь метод аутентификации пользователя
    }
public function getUser($id)
{
    $user = new User::find($id);
    if ($user) {
        return response()->json($user, 200);
    } else {
        return response()->json(['message' => 'User not found']);
    }
}
}
