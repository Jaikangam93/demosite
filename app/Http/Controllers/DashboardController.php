<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth');
    }

    public function showsystemadmindashboard()
    {
        return view('systemadmin.dashboard');
    }
    public function showadministrationdashboard()
    {
        return view('administration.dashboard');
    }

      public function showemployeedashboard()
    {
        return view('employee.dashboard');
    }
     public function showstudentdashboard()
    {
        return view('student.dashboard');
    }

     public function showparentdashboard()
    {
        return view('parent.dashboard');
    }

   



}
