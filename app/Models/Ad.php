<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Ad extends Model
{
    use HasFactory;

    use SoftDeletes;

    //protected $fillable = ['title', 'description', 'price', 'city_id'];

    protected $guarded = [];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function ground()
    {
        return $this->belongsTo(Ground::class);
    }
    public function location()
    {
        return $this->belongsTo(location::class);
    }

}
