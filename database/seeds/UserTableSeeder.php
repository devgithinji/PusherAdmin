<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = new User;
       $user->name = 'samuel jackson';
       $user->email = 'samueljackson@jackson.com';
       $user->password = bcrypt('samuel1234');
       $user->save();
       $user->roles()->attach(Role::where('name','user')->first());

        $admin = new User;
        $admin->name = 'dennis githinji';
        $admin->email = 'wakahiad@gmail.com';
        $admin->password = bcrypt('githinji');
        $admin->save();
        $admin->roles()->attach(Role::where('name','admin')->first());
    }
}
