<?php

namespace App\Admin\Widgets;

use App\Models\Category;
use TCG\Voyager\Widgets\BaseDimmer;

class CategoriesWidget extends BaseDimmer
{
  protected $config = [];

  public function run()
  {
    $count = Category::count();

    return view('voyager::dimmer', array_merge($this->config, [
      'icon' => 'voyager-list',
      'title' => "{$count} Categories",
      'text' => 'Total number of categories in the database.',
      'button' => [
        'text' => 'View Categories',
        'link' => route('voyager.categories.index'),
      ],
      'image' => voyager_asset('images/widget-backgrounds/03.jpg'),
    ]));
  }
}