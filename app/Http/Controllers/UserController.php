<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register_user(Request $request)
    {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed',

        ]);

        $user = User::create($data);

        if ($user) {

            return redirect()->route('login');

        }
    }

    public function login_user(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {

            return redirect()->route('all_products');
        }
    }



    public function logout() {
        Auth::logout();
        return view('login');
    }
}
