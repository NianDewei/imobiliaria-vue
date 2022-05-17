<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create roles
        $role_admin = Role::create(['name' => 'Admin']);
        $role_seller = Role::create(['name' => 'Seller']);

        //Create permissions
        Permission::create(['name' => 'dashboard'])->syncRoles([$role_admin, $role_seller]);
        // user
        Permission::create(['name' => 'user.index'])->syncRoles([$role_admin, $role_seller]);
        Permission::create(['name' => 'user.create'])->syncRoles([$role_admin, $role_seller]);
        // Permission::create(['name' => 'user.show']);
        Permission::create(['name' => 'user.edit'])->  syncRoles([$role_admin,$role_seller]);
        Permission::create(['name' => 'user.delete'])->syncRoles([$role_admin,$role_seller]);
        //product
        Permission::create(['name' => 'product.index'])->  syncRoles([$role_admin,$role_seller]);
        Permission::create(['name' => 'product.create'])-> syncRoles([$role_admin,$role_seller]);
        // Permission::create(['name' => 'product.show']);
        Permission::create(['name' => 'product.edit'])->   syncRoles([$role_admin,$role_seller]);
        Permission::create(['name' => 'product.delete'])-> syncRoles([$role_admin,$role_seller]);


    }
}
