<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'products_id',
        'users_id'
    ];

    public function carts()
    {
        return $this->hasOne(Product::class, 'products_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
