<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ground extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $guarded = [];

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }


    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }
}
