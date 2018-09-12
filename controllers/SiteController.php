<?php
/**
 * Created by PhpStorm.
 * User: Ra4ello
 * Date: 10.09.2018
 * Time: 10:53
 */

include_once ROOT.'/models/Category.php';
include_once ROOT.'/models/Product.php';

class SiteController
{
    public function actionIndex()
    {
        $categories = array();
        $categories = Category::getCategoryList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(9);

        require_once (ROOT.'/views/site/index.php');

        return true;
    }
}