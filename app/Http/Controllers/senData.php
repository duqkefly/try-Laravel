<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class senData extends Controller
{
    function processData(Request $request){        
        /* $method = $request->method();
        print_r($method); */      
        
        if($request->has('email')){
            $email = $request->input("email");
            $users = DB::select('select * from users where email = ?', [$email]);
            return $users;
        }else{
            return "No email sended";
        }
    }
    function consulta(){
        $users = DB::select('select * from users where id = ?', [1]);
        print_r($users);
    }
}
