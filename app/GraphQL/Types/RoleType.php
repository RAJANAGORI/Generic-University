<?php
namespace App\GraphQL\Types;

use App\Role;
use Rebing\GraphQL\Support\Facades\GraphQL;

class RoleType extends GenericType
{
    protected $attributes = [
        'name' => 'Role',
        'description' => 'A users role',
        'model' => Role::class,
    ];


    public function fields(): array
    {
        $return = parent::fields(); // TODO: Change the autogenerated stub


        // adding additional fields
        $add = [
            'user' => [
                'type' => GraphQL::type('User'),
                'description' => 'The individual who got this grade',

            ],
        ];

        $return = array_merge($return, $add);
        //$return= $add;

        //dd($return);

        return $return;
    }
}
