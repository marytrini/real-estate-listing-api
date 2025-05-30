<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Property;
use App\Models\Agent;

class Transaction extends Model
{
    protected $table = 'transactions';

    protected $fillable = [
        'property_id',
        'agent_id',
        'client_id',
        'amount',
        'currency',
        'type',
        'status',
        'payment_method',
        'transaction_date',
        'reference_code',
        'notes',
    ];

    /**
     * Get the user that owns the transaction.
     */
    public function property(): BelongsTo
    {
        return $this->belongsTo(Property::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}