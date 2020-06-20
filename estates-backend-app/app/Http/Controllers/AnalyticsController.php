<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


// $StringAnalyticTypes = file_get_contents(base_path("app\Data\analyticTypes.json"));
// $AnalyticTypeBase = json_decode($StringAnalyticTypes, true);

// $StringProperty = file_get_contents(base_path("app\Data\property.json"));
// $PropertyBase = json_decode($StringProperty, true);

// $StringPropertyAnalytics = file_get_contents(base_path("app\Data\propertyAnalytics.json"));
// $PropertyAnalyticsBase = json_decode($StringPropertyAnalytics, true);

class AnalyticsController extends Controller
{
    public function getPropertyAnalytics($propertyId){

        $StringPropertyAnalytics = file_get_contents(base_path("app\Data\propertyAnalytics.json"));
        $PropertyAnalyticsBase = json_decode($StringPropertyAnalytics, true);

        $jsonPropertyAnalytics = $PropertyAnalyticsBase['PropertyAnalytics'];

        $filteredProperties =  array();
        for ($i=0; $i < count($jsonPropertyAnalytics); $i++) { 
            $jsonProperty = $jsonPropertyAnalytics[$i];
           if ($jsonProperty['property_id'] == $propertyId) {
               $filteredProperties[] = $jsonProperty;
           }
        }

        return response()
                    ->json($filteredProperties);
    }

    public function getSummarySuburb($suburb){

        $StringProperty = file_get_contents(base_path("app\Data\property.json"));
        $PropertyBase = json_decode($StringProperty, true);

        $jsonProperties = $PropertyBase['Properties'];

        $filteredProperties =  array();
        for ($i=0; $i < count($jsonProperties); $i++) { 
            $jsonProperty = $jsonProperties[$i];
           if ($jsonProperty['Suburb'] == $suburb) {
               $filteredProperties[] = $jsonProperty;
           }
        }

        $StringPropertyAnalytics = file_get_contents(base_path("app\Data\propertyAnalytics.json"));
        $PropertyAnalyticsBase = json_decode($StringPropertyAnalytics, true);

        $jsonPropertyAnalytics = $PropertyAnalyticsBase['PropertyAnalytics'];

        $propertyAnalyticsSummary = array();
        for ($i=0; $i < count($filteredProperties); $i++) { 
            $jsonProperty = $filteredProperties[$i];
            //get the analytics of each property from $jsonPropertyAnalytics
            //compute for the values needed for the property summary and place as KVP in propertyAnalyticsSummary
        }

        return response()
                ->json($filteredProperties);

    }

    public function getMin($analyticType, $propertyType){

    }

    public function getMax($analyticType, $propertyType){
        
    }

    public function getMedian($analyticType, $propertyType){
        
    }

    public function propWithValue($analyticType, $propertyType){
        
    }

    public function propWithoutValue($analyticType, $propertyType){
        
    }
}
