<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sector extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function ground()
    {
        return $this->hasMany(Ground::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
