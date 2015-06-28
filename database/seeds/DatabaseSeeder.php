<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Login;

class DatabaseSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call('LoginTableSeeder');

        $this->command->info('Login table seeded!');

    }
}

class LoginTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->delete();
        $username = Login::USERNAME;
        $password = Login::PASSWORD;

        Login::create(array('email' => $username ,
                'password' => $password)
        );
    }

}
