<?php
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function login(Request $request)
    {
        error_log('Some .');
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication successful, redirect to a page
            return redirect('/dashboard');
        } else {
            // Authentication failed, redirect back to the login form with an error message
            return redirect()->back()->withErrors(['email' => 'Invalid credentials']);
        }
    }
}
