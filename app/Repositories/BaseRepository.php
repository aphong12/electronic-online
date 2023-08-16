<?php

namespace App\Repositories;

use function Symfony\Component\Translation\t;

class BaseRepository
{
    private $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function create($attribute = [])
    {
        return $this->model->create($attribute);
    }
}
