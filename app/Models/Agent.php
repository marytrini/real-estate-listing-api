<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    protected $fillable = [
        'name',
        'description',
        'status',
        'created_by',
        'updated_by',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function properties()
    {
        return $this->hasMany(Property::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
