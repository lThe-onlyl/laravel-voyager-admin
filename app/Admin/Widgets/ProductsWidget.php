<?php

namespace App\Admin\Widgets;

use App\Models\Product;
use TCG\Voyager\Widgets\BaseDimmer;

class ProductsWidget extends BaseDimmer
{
  protected $config = [];

  public function run()
  {
    $count = Product::count();

    return view('voyager::dimmer', array_merge($this->config, [
      'icon' => 'voyager-basket',
      'title' => "{$count} Products",
      'text' => 'Total number of products in the database.',
      'button' => [
        'text' => 'View Products',
        'link' => route('voyager.products.index'),
      ],
      'image' => voyager_asset('images/widget-backgrounds/02.jpg'),
    ]));
  }
}