<?php


namespace App\classes;


class User
{
    public function getAllUser()
    {
        return[
            0=>[
                'id'=>1,
                'name'=>'Shabuddin Khan',
                'email'=>'shabh@gmail.com',
                'password'=>'123456'
            ],
            1=>[
                'id'=>2,
                'name'=>'Rifat Khan',
                'email'=>'rirat@gmail.com',
                'password'=>'173456'
            ],
            2=>[
                'id'=>3,
                'name'=>'Tareq Khan',
                'email'=>'tareq@gmail.com',
                'password'=>'163456'
            ],
        ];
    }
}