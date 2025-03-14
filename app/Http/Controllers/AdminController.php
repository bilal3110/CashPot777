<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }

    public function addAdmin(Request $request){
        $admin = new Admin();
        $admin->admin_name = $request->admin_name;
        $admin->admin_username = $request->admin_username;
        $admin->admin_password = bcrypt($request->admin_password);
        $admin->save();
        return redirect()->back()->with('success','Admin added successfully');
    }

    public function loginPage(){
        return view('dashboard.auth-login-basic');
    }

    public function login(Request $request)
    {
        $credentials = [
            'admin_username' => $request->admin_username,
            'password' => $request->password, 
        ];
    
        if (Auth::guard('admin')->attempt($credentials, $request->filled('remember'))) {
            return redirect()->route('dashboard');
        }
    
        return back()->with('error', 'Invalid credentials');
    }
    
    
}
