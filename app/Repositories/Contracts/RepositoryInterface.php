<?php


namespace App\Repositories\Contracts;


interface RepositoryInterface
{
    /*get all record */
    public function all(array $columns = null, array $relations = []);

    public function paginate(int $page);

    public function find($ID);

    public function findBy(
        array $criteria,
        array $columns,
        bool $single = true
    );

    public function store(array $item);

    public function update(int $ID, array $item);

    public function updateBy(array $criteria, array $data);

    public function delete(int $ID);

    public function deleteBy(array $criteria);

    public function findWith(int $id, $relations = []);
}
