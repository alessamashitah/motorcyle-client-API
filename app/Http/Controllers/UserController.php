<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    public function index()
    {
        $url = 'http://127.0.0.1:8000/api/v1/users/list';
        $response = Http::get($url);

        $users = $response->json();
        // $list = $response->object()->data;
        // dd($list);
        return view('user.index', compact('response','users'));
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $url = 'http://127.0.0.1:8000/api/v1/users/add';

        $response = Http::post($url,[
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);

        return redirect()->route('user:home');
    }

    public function edit($user)
    {
        $url = 'http://127.0.0.1:8000/api/v1/users/show/'.$user;

        $response = Http::get($url);
        $user = $response->json()['data'];
    
        // dd($user);
        return view('user.edit', compact('user'));
    }

    public function update(Request $request, $user)
    {
        // dd($user);
        $url = 'http://127.0.0.1:8000/api/v1/users/update/'.$user;
        // dd($url);

        $response = Http::post($url,[
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);


        return redirect()->route('user:home');
    }


}
