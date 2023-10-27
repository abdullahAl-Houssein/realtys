<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'house_id',
        'swimming_pool_id',
        'land_id',
        'farm_id',
    ];

    // تعريف العلاقات

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function house()
    {
        return $this->belongsTo(House::class, 'house_id');
    }

    public function swimmingPool()
    {
        return $this->belongsTo(SwimmingPool::class, 'swimming_pool_id');
    }

    public function land()
    {
        return $this->belongsTo(Land::class, 'land_id');
    }

    public function farm()
    {
        return $this->belongsTo(Farm::class, 'farm_id');
    }
}
