<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class Post extends Model {

  public function getData($name)
  {
    return $name;
  }
}
