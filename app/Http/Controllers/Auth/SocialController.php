<?php

namespace App\Http\Controllers\Auth;

use App\Dump;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

use Socialite;
use Auth;

function file_get_contents_curl($url)
{
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

class SocialController extends Controller
{
    public function redirectGoogle()
    {
        return Socialite::driver('google')
            ->scopes(['openid', 'profile', 'email'])
            ->redirect();
    }

    public function callbackGoogle()
    {
        $socialUser = Socialite::driver('google')->user();
        if (empty($socialUser->email)) return view('unauthorized');
        $user = User::where('email', $socialUser->email)->first();

        Auth::loginUsingId($user->id);
        return redirect()->route('index');

    }

    public function redirectFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function callbackFacebook(Request $request)
    {
    	if (isset($request->error_code) && $request->error_code == 200) {
    		return redirect(route('auth.login'))->with('error', 'Facebook login process canceled.');
    	}

        $socialUser = Socialite::driver('facebook')->user();
        if (empty($socialUser->email)) return view('unauthorized');
        $user = User::where('email', $socialUser->email)->first();

        Auth::loginUsingId($user->id);
        return redirect()->route('index');
    }
}
