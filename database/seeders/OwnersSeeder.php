<?php

namespace Database\Seeders;

use App\Models\Owners;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OwnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Owners::factory()->count(5)->create();
    }
}
