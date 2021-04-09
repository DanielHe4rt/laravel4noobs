<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Illuminate\Http\Request;

class UsersController extends Controller
{

    public function getMeProfile()
    {
        $username = "danielhe4rt";
        return view('users', compact('username'));
    }


    public function getProfile(string $username)
    {
        $args = ['a' => 'dasdsa', 'b', 1, 2, 3];
        $whilezada = true;
        $chatters = ['danielhe4rt', 'limatucano', 'alisson63', 'arnoldz', 'glima', 'gabrielgodev', 'ramonribeiro'];
        return view('users', compact(['username', 'args', 'whilezada', 'chatters']));
    }

    public function test(TestRequest $request)
    {
        // Codigo aqui

    }
}
