<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function register(Request $request) 
    {
        $zip = $request->input('person-city');
        $name = $request->input('person-name');
        $city = $request->input('person-city');
        $state = $request->input('person-state');
        $email = $request->input('person-email');
        $gender = $request->input('person-gender');
        $course = $request->input('person-course');
        $address = $request->input('person-address');
        $pressedButton = $request->input('pressedButton');

        if ($pressedButton == 'clear')
        {
            $name = "";
            $email = "";
            $gender = "";
            $course = "";
            $address = "";
            $state = "";
            $city = "";
            $zip = "";

            return redirect('')->with('result');
        }

        return redirect('')->with('result', " ");
    }
}
