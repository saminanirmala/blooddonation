<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('UserTableSeeder');

        $this->command->info('User table seeded!');

    }
}

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('tbl_user')->delete();
        $email = User::EMAIL;
        $password = Hash::make(User::PASSWORD);

        User::create(array('email' => $email ,
                'password' => $password)
        );
    }

}