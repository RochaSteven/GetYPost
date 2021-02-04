<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Level;
use App\Models\User;
use App\Models\Group;
use App\Models\Profile;
use App\Models\Location;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Level::factory(5)->create();
        User::factory(3)->create();
        Group::factory(5)->create();
        $this->call(ProfileSeeder::class);
        $this->call(LocationSeeder::class);

        /*User::factory(5)->create()->each(function($user){
            $profile=$user->profile()->save(Profile::make());
            $profile->location()->save(Location::make());
            $user->groups()->attach($this->array(rand(1,3)));
        });
        */
    }

    /*public function array($max)
    {
        $values=[];
        for ($_REQUEST['i']=1; $_REQUEST['i']<$max; $_REQUEST['i']++) { 
            $values[]=$_REQUEST["i"];
        }
        return $values;
    }*/
}
