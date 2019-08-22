<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductFound extends Model

{
    public $table = "ProductFounds";
    public function User(){
        return $this->hasOne('App/User');
    }
}
