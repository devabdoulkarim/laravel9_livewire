<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Country extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug', 'ios3'];

    protected $dates = [
        'deleted_at'
    ];

    public function setSlugAttribute($value)
    {
       $this->attributes['slug'] = strtoupper($value);

    }

    public function setIos3Atrribute($value)
    {
        $this->attributes['ios3'] = strtoupper($value);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function user()
    {
        return $this->hasMany(User::class);
    }
}
