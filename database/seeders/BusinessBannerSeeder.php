<?php

namespace Database\Seeders;

use App\Models\BusinessBanner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BusinessBannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // BusinessBanner::truncate();

        $faker = \Faker\Factory::create();

        BusinessBanner::create([
            'phone_no' => '0911121314',
            'email' => $faker->email(),
            'facebook_link' => $faker->url(),
            'telegram_link' => $faker->url(),
            'linkedin_link' => $faker->url(),
            'tiktok_link' => $faker->url(),
            'youtube_link' => $faker->url(),
        ]);
    }
}
