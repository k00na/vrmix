<?php

namespace App\Http\Controllers\Auth;

use App;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use GeneaLabs\LaravelMixPanel\LaravelMixPanel;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | IMPORTANT NOTE ON CUSTOMIZING THE DEFAULT REGISTRATION DATA
    |--------------------------------------------------------------------------
    |
    | This seemed to be a simple and straight-forward task but it turns out it needs
    | a lot more than just adding a new column to users table with a migration and setting up
    | the validation + creation of users with this new input. If you're using the Route::auth()
    | that comes with predefined login/register flow, you have to dig a bit deeper. This is on my
    | //TODO list, here's the link: https://laracasts.com/discuss/channels/laravel/how-can-i-modify-laravel-5-login-system-and-add-on-registration-a-username-or-another-field
    |
    */

    

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';
    

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            //'age' => 'required|numeric',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

    }
}
