<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function Login()
    {

        // $name = "prince";
        // $phone = "123";

        // useing compact
        // return view("welcome", compact("name", "phone"));

        // using Associative array key and value par
        // return view("welcome",array(
        //     'name'=>$name,
        //     'phone'=>$phone,
        // ));

        // using with method same is key and value
        // return view("welcome")->with([
        //     'name' => $name,
        //     'phone' => $phone,
        // ]);

        // another way.
        // return view("welcome")->with("name", $name)->with("phone", $phone);


        // this all direact passing data to controller to view

        $data['name'] = 'prince';
        $data['phone'] = '9737070575';
        $data['city'] = 'surat';

        return view("welcome", $data);
    }
}
