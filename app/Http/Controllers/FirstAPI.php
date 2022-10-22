<?php

namespace App\Http\Controllers;

use App\Models\API;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class FirstAPI extends Controller
{
    function firstapi($id=null){
        return $id ? API::find($id) : API::all(); //ternary oparator 


    }

    function api_data_show()
    {
       $data= Http::get('https://jsonplaceholder.typicode.com/posts')->json();
       return view('welcome',compact('data'));
    }


    //api post method

    function  create(Request $req){

        $create= new Api;
        $create->device = $req->device;
        $data= $create->save();
        if($data){
                    return ["Result" => "Data has been saved!"];
        }
        else
                    return ["Result" => "Data Not saved!"];

       
    }

    //API put Method
    function  update(Request $req)
    {

        $find = Api::find($req->id);

        $find->device = $req->device;
        $data = $find->save();
        if ($data) {
            return ["Result" => "Data has been updated!"];
        } else
            return ["Result" => "Data Not updated!"];
    }
}
