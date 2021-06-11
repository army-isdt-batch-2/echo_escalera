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
       return view ('login');
    }
    public function registration()
    {
       return view ('registration');
    }

    public function login_verify()
    {
        dd($this->request->all());
    }
 
}
