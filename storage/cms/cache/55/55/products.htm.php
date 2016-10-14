<?php 
use Milagro\Catalog\Models\Product;class Cms57dd96709fe21043877521_806998115Class extends \Cms\Classes\PageCode
{

public function onStart()
{
    $this['products'] = Product::where('category_id', $this->param('id'))->get();
}
}
