<?php


namespace App\classes;


class Register
{


    public function getAllUser(){

        return [
            0 => [
                'id' => 1,
                'name' => 'Mahbubur Rahman',
                'email' => 'mrfahim@gmail.com',
                'password' => '123456',

            ],
            1 => [
                'id' => 2,
                'name' => 'Tonmoy',
                'email' => 'tonmoy@gmail.com',
                'password' => '123456',

            ],
        ];
    }


}