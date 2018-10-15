<?php
namespace Controller;

use Model\CategoriesManager;
use Twig_Loader_Filesystem;
use Twig_Environment;
class CategoriesController{


    private $twig;

    public function __construct()
    {
        $loader = new Twig_Loader_Filesystem(__DIR__.'/../View');
        $this->twig = new Twig_Environment($loader);
    }

    public function index()
    {
        $categoriesManager = new CategoriesManager();
        $categories = $categoriesManager->selectAllCategories();
        return $this->twig->render('categories.html.twig', ['categories' => $categories]);
    }


    public function show(int $id)
    {
        $categoryManager = new CategoriesManager();
        $category = $categoryManager->selectOneCategory($id);
        return $this->twig->render('showCategory.html.twig', ['category' => $category]);
    }
}


?>