<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Auth;

use App\View\Components\Alert;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        $isAuthenticated = Auth::attempt($credentials);

        if (!$isAuthenticated) {
            return view('components.alert', ['type' => 'error', 'message' => 'Email or password is wrong']);
        } else {
            return response()->view('components.alert', ['type' => 'success', 'message' => 'Login success'])->header('hx-Redirect', '/app/home');
        }
    }
}
