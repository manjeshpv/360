<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

use Auth;
use App\User;

class ProfileController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth:web');
	}

    public function index()
    {
        $id = Auth::id();
        $user = User::find($id);

        return view('profile.index')->with(['user' => $user ]);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect(env('PREFIX'). 'www.'. env('DOMAIN').'/');
    }
}
