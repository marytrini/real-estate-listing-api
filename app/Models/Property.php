<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\PropertyImage;

class Property extends Model
{
    protected $fillable = [
        'title',
        'description',
        'type',
        'status',
        'price',
        'currency',
        'area',
        'bedrooms',
        'bathrooms',
        'garages',
        'address',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'status' => 'boolean',
        'price' => 'float',
        'area' => 'float',
        'bedrooms' => 'integer',
        'bathrooms' => 'integer',
        'garages' => 'integer',
    ];
    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }
    public function images()
    {
        return $this->hasMany(PropertyImage::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
