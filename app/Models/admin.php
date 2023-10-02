<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    public function vendor()
{
    return $this->hasMany(vendor::class);
}
}

//public function admin()
//{
  //  return $this->belongsTo(admin::class);
//}

public function vendor()
{
    return $this->hasMany(vendor::class);
}

