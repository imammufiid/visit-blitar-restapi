<?php

namespace App\Http\Controllers;

use App\Models\Tourism;
use Symfony\Component\HttpFoundation\Response;

class TourismController extends Controller
{

   public function get_all_tourism()
   {
      $tourism = Tourism::all();

      if($tourism != null) {
         return response()->json([
            'status' => Response::HTTP_OK,
            'message' => "This data",
            'data' => $tourism
         ]);
      } else {
         return response()->json([
            'status' => Response::HTTP_NOT_FOUND,
            'message' => "Data Not Available",
         ]);
      }
   }

   

}