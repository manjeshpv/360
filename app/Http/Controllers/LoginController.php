<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:web');
    }

	public function login(Request $req)
	{
		return view('auth.login')
            ->with([
                'continue' => $req->continue
            ]);
	}

	public function submitLogin(Request $req)
	{
		$this->validate($req, [
    		'email' => 'required|email',
    		'password' => 'required|min:6',
    	]);

		if ($req->continue)
        {
            if (Auth::guard('customer')->attempt(['email'=>$req->email, 'password'=>$req->password], $req->remember)) {
                return view('customer.login-success');
            }
        }
        else
        {
            if (Auth::guard('customer')->attempt(['email'=>$req->email, 'password'=>$req->password], $req->remember)) {
                return redirect()->intended(route('customer.locker'));
            }
        }
    	return redirect()->back()->with('error_message', 'Your email/password combination was incorrect')->withInput($req->only('email', 'remember'));
	}
}
