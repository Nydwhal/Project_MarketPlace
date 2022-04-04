<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'description',
        'initial_price',
        "final_price",
        "start_date",
        "end_date",
        'state'
    ];
}
