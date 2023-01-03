<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AppController extends Controller
{
    //

    public function getData()
    {

        $data= [
            "startingPoint" => "866 new york, usa",
            "endingPoint" => "867 new york, usa",
        ];
        return response()->json([
            'code' => Response::HTTP_OK,  'message' => "",'data'=>$data
        ], Response::HTTP_OK);
    }

    public function saveData(Request $request)
    {

        $data= [
            "startingPoint" => "868 new york, usa",
            "endingPoint" => "869 new york, usa",
        ];
        return response()->json([
            'code' => Response::HTTP_OK,  'message' => "",'data'=>$data
        ], Response::HTTP_OK);

    }
}
