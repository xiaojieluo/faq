<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{

  public function typeInfo() {
    return $this->hasOne('App\Category', 'id', 'type')->select('name');
  }

}
