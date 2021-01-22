<?php

namespace App\Http\Controllers;

use App\Models\TourismCategory;
use Symfony\Component\HttpFoundation\Response;

class TourismCategoryController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function get_all_categories()
    {
        $categories = TourismCategory::all();
        return response()->json([
            'status' => Response::HTTP_OK,
            'message' => 'This data',
            'data' => $categories
        ]);
    }
}
