<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'house_id',
        'comment',
    ];

    // تعريف العلاقات
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function house()
    {
        return $this->belongsTo(House::class, 'property_id');
    }

    public function swimmingPool()
    {
        return $this->belongsTo(SwimmingPool::class, 'property_id');
    }

    public function land()
    {
        return $this->belongsTo(Land::class, 'property_id');
    }

    public function farm()
    {
        return $this->belongsTo(Farm::class, 'property_id');
    }
}
