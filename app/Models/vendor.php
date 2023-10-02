<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendor extends Model
{
    public function admin()
    {
        return $this->belongsTo(admin::class);
    }
}

//public function vendor()
//{
  //  return $this->hasMany(Book::class);
//}
use HasFactory;

public function admin()
{
    return $this->belongsTo(admin::class);
}
