<?php

namespace App\Http\Controllers;

use App\Models\Tourism;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class TourismController extends Controller
{

   public function get_all_tourism()
   {
      $baseUrl = URL::to("/img") . "/";
      $tourism = Tourism::all();

      if($tourism != null) {
         $data = [];

         foreach ($tourism as $key => $value) {
            $result = [
               'id' => $value->id,
               'category_id' => $value->category_id,
               'name_tourist_attraction' => $value->name_tourist_attraction,
               'capasity' => $value->capasity,
               'price_ticket' => $value->price_ticket,
               'description' => $value->description,
               'address' => $value->address,
               'latitude' => $value->latitude,
               'longitude' => $value->longitude,
               'image' => $baseUrl . "tourist_attraction/". "tes.png"
            ];
            array_push($data, $result);
         }
         return response()->json([
            'status' => Response::HTTP_OK,
            'message' => "This data",
            'data' => $data
         ], Response::HTTP_OK);
      } else {
         return response()->json([
            'status' => Response::HTTP_NOT_FOUND,
            'message' => "Data Not Available",
         ]);
      }
   }

   public function get_tourism_by_search()
   {
      $baseUrl = URL::to("/img") . "/";
      $query = request('query');

      $tourism = Tourism::where('name_tourist_attraction', 'LIKE', '%' . $query . '%')->get();

      if($tourism != null) {
         $data = [];

         foreach ($tourism as $key => $value) {
            $result = [
               'id' => $value->id,
               'category_id' => $value->category_id,
               'name_tourist_attraction' => $value->name_tourist_attraction,
               'capasity' => $value->capasity,
               'price_ticket' => $value->price_ticket,
               'description' => $value->description,
               'address' => $value->address,
               'latitude' => $value->latitude,
               'longitude' => $value->longitude,
               'image' => $baseUrl . "tourist_attraction/". "tes.png"
            ];
            array_push($data, $result);
         }

         return response()->json([
            'status' => Response::HTTP_OK,
            'message' => "This data",
            'data' => $data
         ], Response::HTTP_OK);
      } else {
         return response()->json([
            'status' => Response::HTTP_NOT_FOUND,
            'message' => "Data Not Available",
         ]);
      }
   }

}