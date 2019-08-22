<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductLost extends Model
{
    public $table = "ProductLosts";

    public function User(){
        return $this->hasOne('App/User');
    }
}
