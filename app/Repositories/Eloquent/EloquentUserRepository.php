<?php


namespace App\Repositories\Eloquent;


use App\Repositories\Contracts\UserRepositoryInterface;
use App\User;

class EloquentUserRepository extends EloquentBaseRepository implements UserRepositoryInterface
{
    protected $model = User::class;

    public function getAdmins()
    {
        // TODO: Implement getAdmins() method.
    }
}
