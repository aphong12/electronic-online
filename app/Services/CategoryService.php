<?php

namespace App\Services;

use App\Repositories\CategoryRepository;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Exception\CommonMarkException;
use MongoDB\Driver\Exception\CommandException;
use Psy\Util\Str;

class CategoryService
{
   private $categoryReposiitory;
   public function __construct(CategoryRepository $categoryRepository)
   {
       $this->categoryReposiitory = $categoryRepository;
   }

    public function getAllCategories($page)
    {
       return $this->categoryReposiitory->getCategories($page);
    }

    public function getParentCategories()
    {
        return $this->categoryReposiitory->getParentCategories();
    }

    /**
     * @throws CommonException
     */
    public function store($request)
    {
        try {
            DB::Begintransaction();
            $category = $this->categoryRepository->create([
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'description' => $request->description,
                'parent_id' => $request->parent_id,
                'is_active' => $request->is_active ? 1 : 0,
            ]);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();

            throw new CommonException('Something Wrong!');
        }
    }

    public function update($request, $id)
    {
        try {
            DB::Begintransaction();

            if ($request->ajax()) {
                $category = $this->categoryRepository->update($id, [
                    'is_active' => $request->is_active,
                ]);
                DB::commit();

                return response()->json([
                    'title'=> 'Update Status',
                    'message' => 'Update Status for ' . $category->name . ' successfully!',
                    'is_active' => $category->is_active,
                ]);
            }

            $this->categoryRepository->update($id, [
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'description' => $request->description,
                'parent_id' => $request->parent_id,
                'is_active' => $request->is_active ? 1 : 0,
            ]);
            DB::commit();

            return Redirect::route('categories.index')->with('success', 'Created Category Successfully!');
        } catch (\Exception $e) {
            DB::rollBack();

            return Redirect::back()->withErrors(['common' => 'Something Wrong!'])->withInput();
        }
    }

    public function edit($id)
    {
        return $this->categoryRepository->getById($id);
    }

    public function changeStatus($id, $request)
    {
        $category = $this->categoryRepository->update($id, [
            'is_active' => $request->is_active,
        ]);

        return response()->json($category);
    }
}
