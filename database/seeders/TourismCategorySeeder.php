<?php

namespace Database\Seeders;

use App\Models\TourismCategory;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TourismCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cat = new TourismCategory();
        $cat->name_category = "Wisata Alam";
        $cat->status = 1;
        $cat->created_at = Carbon::now()->timestamp;
        $cat->save();
        
        $cat2 = new TourismCategory();
        $cat2->name_category = "Wisata Pantai";
        $cat2->status = 1;
        $cat2->created_at = Carbon::now()->timestamp;
        $cat2->save();
        
        $cat3 = new TourismCategory();
        $cat3->name_category = "Wisata Budaya Sejarah";
        $cat3->status = 1;
        $cat3->created_at = Carbon::now()->timestamp;
        $cat3->save();
        
        $cat4 = new TourismCategory();
        $cat4->name_category = "Wisata Museum";
        $cat4->status = 1;
        $cat4->created_at = Carbon::now()->timestamp;
        $cat4->save();
        
        $cat5 = new TourismCategory();
        $cat5->name_category = "Wisata Khusus";
        $cat5->status = 1;
        $cat5->created_at = Carbon::now()->timestamp;
        $cat5->save();
        
        $cat6 = new TourismCategory();
        $cat6->name_category = "Wisata Buatan";
        $cat6->status = 1;
        $cat6->created_at = Carbon::now()->timestamp;
        $cat6->save();
        
        $cat7 = new TourismCategory();
        $cat7->name_category = "Desa Wisata";
        $cat7->status = 1;
        $cat7->created_at = Carbon::now()->timestamp;
        $cat7->save();
    }
}
