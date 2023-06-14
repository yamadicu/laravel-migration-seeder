<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class TrainController extends Controller
{
    public function getTrains(){
        $trains = Train::All();

        return view( 'welecome', compact( 'trains' ));
    }
}
