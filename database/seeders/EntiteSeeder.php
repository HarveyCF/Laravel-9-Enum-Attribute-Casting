<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Entite;
use App\Enums\NomEntite;

class EntiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Demonstrate that an invalid enum value will be detected
        Entite::factory()->create(['nom' => "cf"]);
        // Entite::factory()->create(['nom' => NomEntite::CF]);
        Entite::factory()->create(['nom' => NomEntite::CCPM]);
        Entite::factory()->create(['nom' => NomEntite::HONOTEL]);
        Entite::factory()->create(['nom' => NomEntite::JNSP]);
    }
}