<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function ind()
    {

        if( Auth::user()->power  == 1){
            $users = User::all();
            return view('user.ind', compact('users'));
        }
        else{
            abort(403);
        }
    }

    public function edit (User $user){
        if( Auth::user()->power  == 1) {
            return view('user.edit ', compact('user'));
        }
        else{
            abort(403);
        }

    }

    public function update(User $user){
        $data = request()->validate([
            'name' => 'string',
            'email' => 'email',
            'power' => 'string',
        ]);
        $user->update($data);
        return redirect() -> route('user.ind');
    }
}
