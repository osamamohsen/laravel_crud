<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function show(){
        $users = User::all();
        return view('users.show',compact('users'));
    }
    public function delete($id){

    }
    public function insert(Request $request){
//        dd($request->all());
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);
        return redirect('/users');
    }

    public function edit($id){
        $user = User::findorfail($id);
//        dd($user);
        return view('users.update',compact('user'));
    }

    public function update(Request $request,$id){
        $user = User::findorfail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect('/users');
    }
}
