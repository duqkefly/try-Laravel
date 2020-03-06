<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class senData extends Controller
{
    function processData(Request $request){        
        /* $method = $request->method();
        print_r($method); */
        $email = $request->input("email");
        
        
        $users = DB::select('select * from users where email = ?', [$email]);
        
        /* if($request->has('email')){
            $email = $request->input("email");
            echo "email:: ".$email."\n";
            print_r($users);
        }else{
            return "No email sended";
        } */
        return $users;
    }
    function consulta(){
        $users = DB::select('select * from users where id = ?', [1]);
        print_r($users);
    }
}
