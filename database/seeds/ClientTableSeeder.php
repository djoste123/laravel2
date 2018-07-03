<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('clients')->insert(
        [
            'title' => 'Mr',
            'name' => 'John',
            'last_name' => 'Doe',
            'address' => 'Street 123',
            'zip_code' => '11030',
            'city' => 'LA',
            'state' => 'CA',
            'email' => 'john@example.com',
        ]
                );
        DB::table('clients')->insert(
        [
            'title' => 'Mrs',
            'name' => 'Jane',
            'last_name' => 'Doe',
            'address' => 'Another Street 123',
            'zip_code' => '11030',
            'city' => 'LA',
            'state' => 'CA',
            'email' => 'jane@example.com',
        ]
                );
    }
}
