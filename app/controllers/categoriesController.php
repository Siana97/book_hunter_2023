<?php

namespace App\Controllers\CategoriesController;

use App\Models\CategoriesModel;

function showAction(\PDO $connexion)
{
    include_once "../app/models/categoriesModel.php";
    $categories = CategoriesModel\findAll($connexion);

    global $content, $title;
    $title = $categories['name'];
    ob_start();
    include '../app/views/categories/show.php';
    $content = ob_get_clean();
}
