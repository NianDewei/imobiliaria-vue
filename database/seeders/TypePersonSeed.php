<?php

namespace Database\Seeders;

use App\Models\TypePerson;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypePersonSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypePerson::create([
            'name' => 'Proovedor',
        ]);

        TypePerson::create([
            'name' => 'Cliente',
        ]);
    }
}
