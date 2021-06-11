<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect, Auth;
use App\Models\Users;
use App\Models\Messages;


class LoginController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;

    }

    public function login()
    {
        return view('login');
    }
    public function registration()
    {
        return view('registration');
    }

    public function login_verify()
    {
        $login = Auth::attempt($this->request->except('_token'));
        if($login){

            return Redirect::route('app');
        }
        return Redirect::route('login')->withError('Invalid user credentials.....!');
    }
    public function registration_verify()
    {
        $this->request->merge([
           
            'password' =>bcrypt($this->request->password)
        ]);
        $data = Users::create(
            $this->request->except('_token')
        );

        dd($data);
        return Redirect::route('login');
    }
}
