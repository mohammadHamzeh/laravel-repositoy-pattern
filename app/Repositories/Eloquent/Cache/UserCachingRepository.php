<?php


namespace App\Repositories\Eloquent\Cache;


use App\Repositories\Contracts\UserRepositoryInterface;
use Illuminate\Contracts\Cache\Repository;

class UserCachingRepository implements UserRepositoryInterface
{
    private $userRepository;
    private $cache;

    public function __construct()
    {
        $this->userRepository = resolve(UserRepositoryInterface::class);
        $this->cache = resolve(Repository::class);
    }

    public function all(array $columns = null, array $relations = [])
    {
        return $this->cache->remember('user.all', 60, function () {
            return $this->userRepository->all();
        });
    }

    public function paginate(int $page)
    {
        // TODO: Implement paginate() method.
    }

    public function find($ID)
    {
        // TODO: Implement find() method.
    }

    public function findBy(array $criteria, array $columns, bool $single = true)
    {
        // TODO: Implement findBy() method.
    }

    public function store(array $item)
    {
        // TODO: Implement store() method.
    }

    public function update(int $ID, array $item)
    {
        // TODO: Implement update() method.
    }

    public function updateBy(array $criteria, array $data)
    {
        // TODO: Implement updateBy() method.
    }

    public function delete(int $ID)
    {
        // TODO: Implement delete() method.
    }

    public function deleteBy(array $criteria)
    {
        // TODO: Implement deleteBy() method.
    }

    public function findWith(int $id, $relations = [])
    {
        // TODO: Implement findWith() method.
    }

    public function getAdmins()
    {
        // TODO: Implement getAdmins() method.
    }
}
