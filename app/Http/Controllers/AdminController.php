<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * show admin login form
     */

     public function ShowAdminLogin(){

        return view('admin.login');

     }


     /**
     * show admin register form
     */

    public function ShowAdminRegister(){

        return view('admin.register');

     }


     /**
     * show admin dashboard form
     */

    public function ShowAdminDashboard(){

        return view('admin.dashboard');

     }


}
