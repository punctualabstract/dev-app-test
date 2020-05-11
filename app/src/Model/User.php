<?php

namespace Pab\Model;

use Pop\Model\AbstractModel;

class User extends AbstractModel
{

    /**
     * Pseudo-data for testing purposes only
     * @var array
     */
    protected $users = [
        1 => [
            'id'       => 1,
            'username' => 'testuser',
            'email'    => 'test@email.com'
        ],
        2 => [
            'id'       => 2,
            'username' => 'anotheruser',
            'email'    => 'another@email.com'
        ],
        3 => [
            'id'       => 3,
            'username' => 'onemoreuser',
            'email'    => 'onemore@email.com'
        ]
    ];

    public function getAll()
    {
        return $this->users;
    }

    public function getById($id)
    {
        return (isset($this->users[$id])) ? $this->users[$id] : [];
    }

}
