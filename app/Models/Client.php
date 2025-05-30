<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'status',
        'type',
        'lead_status',
        'origin',
        'created_by',
        'updated_by',
    ];
    
    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }
    public function transactions()
    {
        return $this->hasMany(Transaction::class, 'client_id');
    }
}
