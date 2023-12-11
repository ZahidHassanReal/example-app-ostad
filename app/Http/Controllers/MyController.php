<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function MyAction (Request $request):array{

        // $name=$request->input(key:'name');
        // $age=$request->input(key:'age');


        // return "My name is = ${name} and  my age is = ${age}";
        //return $request->input();
        //return $request->header();
        $token=$request->header(key:'token');
        $city=$request->input(key:'city');
        $postcode=$request->input(key:'postCode');
         $name=$request->name;
         $age=$request->age;

         return array(
            'city' => $city,
            'postcode' => $postcode ,
            'name' => $name,
            'age' => $age,
            'token' => $token
        );

    }
}
