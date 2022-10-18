<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{

    public function users()
    {
        $users =  User::where('remember_token', NULL)->get();
        return view('users', compact('users'));
    }

    public function delete_user(Request $request)
    {
        $user_id = $request->delete_user_id;

        $users = User::findOrFail($user_id);
        $users->delete();
        return redirect(route('users'))->with('error', 'User Deleted successfully');
    }

    public function logout()
    {

        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }


    public function tasks()
    {
        //$tasks = Task::all();
        return view('tasks');
    }
    public function show_add_task()
    {
        return view('add_tasks');
    }

    public function announced()
    {
        return view('announced');
    }

   




}
