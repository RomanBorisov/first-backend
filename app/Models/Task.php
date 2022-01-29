<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'title',
        'description'
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    use HasFactory;
}
