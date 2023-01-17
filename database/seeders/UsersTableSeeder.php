<?php

namespace Database\Seeders;

use App\Enums\Role as RoleEnum;
use App\Models\Role as RoleModel;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        RoleModel::truncate();
        User::truncate();

        $this->role();
        $this->superAdmin();
    }


    public function role()
    {
        foreach (RoleEnum::cases() as $role) {
            RoleModel::create([
                'role' => $role->value,
                'label' => $role->label(),
            ]);
        }
    }

    public function superAdmin()
    {
        $user = User::create([
            'name' => 'Khadafi',
            'email' => 'khadafi1675@gmail.com',
            'phone' => '082352675346',
            'username' => 'khadafi',
            'password' => bcrypt('qweasdzxc'),
        ]);

        $user->roles()->sync(RoleEnum::SuperAdmin->value);
    }
}
