<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public const ENGINES = [
        'diesel',
        'petrol',
        'electric',
        'hybrid',
    ];

    protected $fillable = [
        'brand',
        'model',
        'year',
        'max_speed',
        'is_automatic',
        'engine',
        'number_of_door',
    ];

    protected $casts = [
        'is_automatic' => 'boolean',
    ];

    public function scopeSearchByBrand($query, $brand)
    {
        $query->where('brand', 'like', "%$brand%");
    }

    public function scopeSearchByModel($query, $model)
    {
        $query->where('model', 'like', "%$model%");
    }
}