<?php
/**
 * Created by PhpStorm.
 * User: julien
 * Date: 09/10/18
 * Time: 14:18
 */
namespace Controller;
use Model\CategoryManager;
class CategoryController
{
    public function index()
    {
        $categoryManager = new CategoryManager();
        $categories=$categoryManager->selectAllCategories();
        require __DIR__ . '/../View/category.php';
    }
    public function show(int $id)
    {
        $categoryManager = new CategoryManager();
        $category = $categoryManager->selectOneCategory($id);

        require __DIR__ . '/../View/showCategory.php';
    }
}
