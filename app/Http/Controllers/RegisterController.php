<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }
    public function store(Request $request){

        $request->request->add([ 'username' => Str::slug( $request->username )]);

        //dd($request);
        $this->validate($request, [
            'name' => 'required|max:30',
            'username' => 'required|min:4|max:15|unique:users',
            'email' => 'required|unique:users|email|max:40',
            'password' => 'required|confirmed|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make( $request->password ),
        ]);

        //Autenticación de Usuario
        //auth()->attempt([
        //    'email' => $request->email,
        //    'password' => $request->password
        //]);

        //Otra Foma de Autenticar
        auth()->attempt($request->only('email', 'password'));

        //Redireccionar
        return redirect()->route('post.index');

    }
}
