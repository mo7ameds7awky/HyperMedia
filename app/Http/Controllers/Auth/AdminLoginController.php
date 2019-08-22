<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

  public function __construct()
  {
    $this->middleware('guest:admin', ['except' => ['logout']]);
  }

  public function showLoginForm()
  {
    return view('auth.admin-login');
  }

  public function login(Request $request)
  {
    $this->validate($request, [
      'username'   => 'required',
      'password' => 'required'
    ]);

    if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password], $request->remember)) {
      return redirect()->intended(route('adminHome'));
    }

    return redirect()->back();
  }

  public function logout()
  {
    Auth::guard('admin')->logout();
    return redirect('/');
  }
}
