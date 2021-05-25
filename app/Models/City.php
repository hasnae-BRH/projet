<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class City extends Model
{
    use HasFactory;

    use softDeletes;
    
    protected $fillable = ['label'];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }
    public function sector()
    {
        return $this->hasMany(Sector::class);
    
    }

    


}

