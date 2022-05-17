<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Client;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(TypePersonSeed::class);
        User::factory()->create()->assignRole('Admin');
        User::factory(100)->create()->each(fn ($user) => $user->assignRole('Seller'));
        Client::factory(10000)->create();
    }
}
