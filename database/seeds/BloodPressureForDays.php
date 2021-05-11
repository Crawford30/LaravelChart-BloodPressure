<?php

use Carbon\Carbon;
use App\BloodPressure;
use Illuminate\Database\Seeder;

class BloodPressureForDays extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 100; $i++) {
            BloodPressure::create([
                'rate' => rand(50, 190),
                'systolic' => rand(100, 140),
                'diastolic' => rand(70, 120),
                'created_at' => Carbon::now()->subDays(rand(2, 20))->format('Y-m-d H:i:s')


            ]);
        }
    }
}