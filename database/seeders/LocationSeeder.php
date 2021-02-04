<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $location = new Location();
         $location->address = 'El Valle';
         $location->latitude = "12345789";
         $location->longitude = "78954321";
         $location->profile_id = 1;
         $location->save();
         
         $location2 = new Location();
         $location2->address = 'CCI';
         $location2->latitude = "897654";
         $location2->longitude = "32156497";
         $location2->profile_id = 2;
         $location2->save();

         $location3 = new Location();
         $location3->address = 'Cumbaya';
         $location3->latitude = "741852963";
         $location3->longitude = "36928147";
         $location3->profile_id = 3;
         $location3->save();
    }
}
