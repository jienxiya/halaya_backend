<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    protected $table = 'orders';
    protected $fillable = [
        'customer_id',
        'receiver_name',
        // 'customer_address',
        'building/street',
        'barangay',
        'city/municipality',
        'province',
        'contact_number', 
        'ubeHalayaJar_qty',
        'ubeHalayaTub_qty',
        'preferred_delivery_date',
        'distance',
        'order_status',
    ];
}


