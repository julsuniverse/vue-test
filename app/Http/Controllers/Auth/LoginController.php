<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        $users = [
            [
                'id' => 1,
                'name' => 'Julia',
                'email' => 'julia@email.com',
                'status' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Julia2',
                'email' => 'julia2@email.com',
                'status' => 0,

            ],
            [
                'id' => 3,
                'name' => 'Igor',
                'email' => 'igor@email.com',
                'status' => 1,
            ]
        ];

        return view('auth.login', compact('users'));
    }

    public function getPost()
    {
        $posts = Post::paginate(2);

        return $posts;
    }
}
