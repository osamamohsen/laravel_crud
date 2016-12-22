<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Facker;
use App\User;
class UserTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facker = Facker::create();
        foreach(range(1,50) as $index){
            User::create([
                'name' => $facker->userName,
                'email' => $facker->email,
                'password' => 'secret'/*lw ana 3ayz 23mel set attribute 2ro7 23melo fe model*/
            ]);//end insert user
        }//end for each(insert users)
    }
}
