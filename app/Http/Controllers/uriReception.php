<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uriReception extends Controller
{
    function recept($id=null){
        echo "The parameter recept was throw uriSegment with->> ".$id;

    }
}
