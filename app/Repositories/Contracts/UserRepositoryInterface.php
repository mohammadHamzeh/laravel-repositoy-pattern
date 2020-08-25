<?php


namespace App\Repositories\Contracts;


interface UserRepositoryInterface extends RepositoryInterface
{
    // write methods for user

    public function getAdmins();
}
