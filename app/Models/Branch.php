<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'city'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
