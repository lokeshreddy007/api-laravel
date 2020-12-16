<?php

namespace Database\Seeders;

use App\Models\Person;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PersonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Person::factory()->time(50);
    }
}
