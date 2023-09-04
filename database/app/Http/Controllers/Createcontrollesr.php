<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Createcontrollesr extends Controller
{
    function create_view(){
        return view('create');
    }
    function create(Request $request){
        $name = $request->input('name');
        DB::insert('insert into user (name) values(?)',[$name]);
        echo "Record inserted successfully.<br/>";
        echo '<a href = "/insert">Click Here</a> to go back.';
    }
}
