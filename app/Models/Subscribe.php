<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
    use HasFactory;

      use HasFactory;
        protected $fillable = [
        'is_active',
        'user_id', 
        ];
public function user()
  {
      return $this->belongsTo(User::class);
  }
}