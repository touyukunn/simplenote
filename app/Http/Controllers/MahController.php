<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MahController extends Controller
{
    //足し算を行う
    public function sum($x,$y){
        $sum= $x+$y;
        return View::make('sum',['x'=>$x,'y'=>$y,'sum'=>$sum]);
    }
}
