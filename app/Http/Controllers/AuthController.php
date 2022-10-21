<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'nis' => 3103120234,
            'name' => 'Yehuda Melvin Sugiarto',
            'phone' => '081328135154',
            'class' => 'XII RPL 7'
        ];
    }
}
