<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function getProperty(Request $request){
        $jsonString = file_get_contents(base_path("app\Data\analyticTypes.json"));
        $jsonAnalyticType = json_decode($jsonString, true);
        return response()
                    ->json($jsonAnalyticType);
    }
}
