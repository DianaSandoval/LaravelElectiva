<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllExample extends Controller{
    
    public function begin(){
        $users=[['id'=>'3469','name'=>'simon'],['id'=>'1930','name'=>'lola']];
        return view('app.example', ['users'=>$users]);
    }

}
