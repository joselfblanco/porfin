<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Producto extends Model
{
    //
    use  SoftDeletes;
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
}
