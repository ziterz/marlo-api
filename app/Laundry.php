<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laundry extends Model
{
    protected $table = 'laundry';
    public function provinsi()
    {
        return $this->belongsTo('App\Provinsi');
    }
    public function kota()
    {
        return $this->belongsTo('App\Kota');
    }
    public function layanan()
    {
        return $this->hasMany('App\Layanan');
    }


}
