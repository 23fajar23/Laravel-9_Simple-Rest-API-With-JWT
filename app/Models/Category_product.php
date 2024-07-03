<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category_product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

}
