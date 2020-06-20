<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnalyticsController extends Controller
{
    public function getPropertyAnalytics(Request $request){

        $jsonString = file_get_contents(base_path("app\Data\analyticTypes.json"));
        $jsonAnalyticType = json_decode($jsonString, true);

        $jsonStringProperty = file_get_contents(base_path("app\Data\property.json"));
        $jsonProperty = json_decode($jsonString, true);

        $jsonStringPropertyAnalytics = file_get_contents(base_path("app\Data\propertyAnalytics.json"));
        $jsonPropertyAnalytics = json_decode($jsonString, true);


        
        return response()
                    ->json($jsonAnalyticType);
    }
}
