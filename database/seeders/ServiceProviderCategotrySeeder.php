<?php

namespace Database\Seeders;

use App\Models\ServiceProviderCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceProviderCategotrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $spc = new ServiceProviderCategory;
        $spc->name = "Hotel Accommodation";
        $spc->slug = "hotel-accommodation";
        $spc->status = "active";
        $spc->save();

        $spc = new ServiceProviderCategory;
        $spc->name = "Tour Packages";
        $spc->slug = "tour-packages";
        $spc->status = "active";
        $spc->save();

        $spc = new ServiceProviderCategory;
        $spc->name = "Private Chartered Flights";
        $spc->slug = "private-chartered-flights";
        $spc->status = "active";
        $spc->save();

        $spc = new ServiceProviderCategory;
        $spc->name = "Car Rental";
        $spc->slug = "car-rental";
        $spc->status = "active";
        $spc->save();
    }
}
