<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function test(Request $request, $param1){
        echo $this->_minus(2,1); // print
        return "Hello World";
    }

    private function _additional($param1, $param2){
        return $param1 + $param2;
    }

    private function _minus($param1, $param2){
        return $param1 - $param2;
    }

    private function _test2(Request $request, $param1){
        echo $param1;
        return "Hello World";
    }
}

