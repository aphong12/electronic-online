<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\BaseRepository;

class CategoryRepository extends BaseRepository
{
    private $model;
    public function __construct(Category $model)
    {
        $this->model = $model;
        parent::__construct($model);
    }

    public function getCategories($page)
    {
        return $this->model->with(['parentCategory'])->paginate(10, '*' , $page);
    }

    public function getParentCategories()
    {
        $this->model->where('parent_id', 0)->get();
    }

    public function update($id, $attribute)
    {
        $model = $this->getById($id);
        $model->update($attribute);

        return $model;
    }
}
