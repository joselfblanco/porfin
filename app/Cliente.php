<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{ 
    protected $fillable=['nombre_cli'];
    
    public function producto()
    {
        return $this->hasOne('App\Producto');
    }
    public function produc_varios()
    {
        return $this->hasMany('App\Producto');
    }

   
    //
}
