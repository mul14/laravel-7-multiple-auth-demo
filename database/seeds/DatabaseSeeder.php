<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PatientSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(StaffSeeder::class);
    }
}
