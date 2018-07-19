<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
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
    //protected $redirectTo = '/home';


     public function redirectTo()
    {

        $role = \Auth::user()->role;
        
        if ($role == 'SYA') {         

            return('systemadmin/dashboard');

        } 
        elseif ($role == 'EMP')
         {
            //$this->redirectTo = 'managementdashboard'; //check on route Web
            return('employee/dashboard');
        }

        elseif ($role == 'STD')
         {
            //$this->redirectTo = 'customercareexecutive';
            return('student/dashboard');
        }
        elseif ($role == 'PRT')
         {
            //$this->redirectTo = 'customercareexecutive';
            return('parent/dashboard');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
