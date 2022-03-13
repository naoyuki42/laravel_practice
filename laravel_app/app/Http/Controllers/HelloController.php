<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    /*
    * メソッド:GET
    * URI:/hello
    *     /hello/{id}
    */
    public function index($people) {
        $data = [
            'msg' => $people,
        ];

        return view('hello.index', $data);
    }

    /*
    * メソッド:GET
    * URI:/hello/other
    */
    public function other(Request $request) {
        $data = [
            'msg' => $request->bye,
        ];

        return view('hello.index', $data);
    }
}
