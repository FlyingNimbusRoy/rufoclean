<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class locatie extends Model
{
    //
    protected $table = 'locatie';

    public function bestellingen(){
      return $this.hasMany('App\bestellingen', 'locatie_id', 'id');
    }
