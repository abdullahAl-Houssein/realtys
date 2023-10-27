<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserOrder extends Model
{
    use HasFactory;
    protected $table = 'user_order'; // اسم الجدول الوسيط

    protected $fillable = [
        'user_id', // معرف المستخدم
        'order_id', // معرف الطلب
    ];
}
