<?php

namespace Database\Seeders;
use App\Models\Profile;

use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profile = new Profile();
        $profile->name = 'User1';
        $profile->description = 'Enjoy';
        $profile->followers = '25';
        $profile->following = '50';
        $profile->user_id = 1;
        $profile->save();

        $profile2 = new Profile();
        $profile2->name = 'User2';
        $profile2->description = 'Enjoy';
        $profile2->followers = '25';
        $profile2->following = '50';
        $profile2->user_id = 2;
        $profile2->save();

        $profile3 = new Profile();
        $profile3->name = 'User3';
        $profile3->description = 'Enjoy';
        $profile3->followers = '25';
        $profile3->following = '50';
        $profile3->user_id = 3;
        $profile3->save();
    }
}
