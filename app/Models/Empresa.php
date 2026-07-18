<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
