<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class OrganisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Organisation::factory(10)->create();

    }
}
