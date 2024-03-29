<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TenantSmsGateway extends Model
{
    use HasFactory;
    protected $fillable = [
        'tenant_id',
        'api_id',
        'api_password',
        'sender_id',
        'phonenumber',
        'textmessage',
        'amount',
        'msg_type',
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}
