<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    public function laundry()
    {
        return $this->hasMany('App\Laundry');
    }

}
