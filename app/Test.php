<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\Phone;
//use App\Phone;
class Test extends Model
{
    public function phone(){
      return $this->hasMany('App\Phone');
    }

}
