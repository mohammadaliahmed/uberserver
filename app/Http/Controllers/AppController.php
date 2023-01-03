<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //

    public function getData()
    {

        return [
            "startingPoint" => "866 new york, usa",
            "endingPoint" => "867 new york, usa",
        ];

    }

    public function saveData(Request $request)
    {

        return [
            "startingPoint" => "868 new york, usa",
            "endingPoint" => "869 new york, usa",
        ];

    }
}
