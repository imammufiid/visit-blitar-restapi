<?php

namespace Database\Seeders;

use App\Models\Tourism;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TourismSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tourism = new Tourism();
        $tourism->category_id = 2;
        $tourism->name_tourist_attraction = "Pantai Tambakrejo";
        $tourism->capasity = 1000;
        $tourism->price_ticket = 0;
        $tourism->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque labore eligendi qui maxime accusamus reprehenderit earum iste, culpa eveniet veritatis placeat impedit, harum obcaecati saepe. Vel minus esse quo similique!";
        $tourism->address = "Tambakrejo";
        $tourism->latitude = "-8.00000";
        $tourism->longitude = "12.00000";
        $tourism->created_at = Carbon::now()->timestamp;
        $tourism->save();
        
        $tourism2 = new Tourism();
        $tourism2->category_id = 2;
        $tourism2->name_tourist_attraction = "Pantai Pangi";
        $tourism2->capasity = 1000;
        $tourism2->price_ticket = 0;
        $tourism2->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque labore eligendi qui maxime accusamus reprehenderit earum iste, culpa eveniet veritatis placeat impedit, harum obcaecati saepe. Vel minus esse quo similique!";
        $tourism2->address = "Pangi";
        $tourism2->latitude = "-8.00000";
        $tourism2->longitude = "12.00000";
        $tourism2->created_at = Carbon::now()->timestamp;
        $tourism2->save();
        
        $tourism2 = new Tourism();
        $tourism2->category_id = 2;
        $tourism2->name_tourist_attraction = "Pantai Pasir Putih";
        $tourism2->capasity = 1000;
        $tourism2->price_ticket = 0;
        $tourism2->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque labore eligendi qui maxime accusamus reprehenderit earum iste, culpa eveniet veritatis placeat impedit, harum obcaecati saepe. Vel minus esse quo similique!";
        $tourism2->address = "Pangi";
        $tourism2->latitude = "-8.00000";
        $tourism2->longitude = "12.00000";
        $tourism2->created_at = Carbon::now()->timestamp;
        $tourism2->save();
        
        $tourism2 = new Tourism();
        $tourism2->category_id = 1;
        $tourism2->name_tourist_attraction = "Gunung Kelud";
        $tourism2->capasity = 1000;
        $tourism2->price_ticket = 0;
        $tourism2->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque labore eligendi qui maxime accusamus reprehenderit earum iste, culpa eveniet veritatis placeat impedit, harum obcaecati saepe. Vel minus esse quo similique!";
        $tourism2->address = "Pangi";
        $tourism2->latitude = "-8.00000";
        $tourism2->longitude = "12.00000";
        $tourism2->created_at = Carbon::now()->timestamp;
        $tourism2->save();
        
        $tourism2 = new Tourism();
        $tourism2->category_id = 4;
        $tourism2->name_tourist_attraction = "Museum Blabla";
        $tourism2->capasity = 1000;
        $tourism2->price_ticket = 0;
        $tourism2->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque labore eligendi qui maxime accusamus reprehenderit earum iste, culpa eveniet veritatis placeat impedit, harum obcaecati saepe. Vel minus esse quo similique!";
        $tourism2->address = "Pangi";
        $tourism2->latitude = "-8.00000";
        $tourism2->longitude = "12.00000";
        $tourism2->created_at = Carbon::now()->timestamp;
        $tourism2->save();
        
        $tourism2 = new Tourism();
        $tourism2->category_id = 7;
        $tourism2->name_tourist_attraction = "Desa Precet";
        $tourism2->capasity = 1000;
        $tourism2->price_ticket = 0;
        $tourism2->description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque labore eligendi qui maxime accusamus reprehenderit earum iste, culpa eveniet veritatis placeat impedit, harum obcaecati saepe. Vel minus esse quo similique!";
        $tourism2->address = "Pangi";
        $tourism2->latitude = "-8.00000";
        $tourism2->longitude = "12.00000";
        $tourism2->created_at = Carbon::now()->timestamp;
        $tourism2->save();
    }
}
