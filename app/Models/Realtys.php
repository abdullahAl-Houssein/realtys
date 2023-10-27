<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realtys extends Model
{
    use HasFactory;
    protected $fillable = ['location',
                            'area',
                            'user_id',
                            'category_id',
                            'description',
                            'price',
                            'is_available',
                            'images'
                        ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
