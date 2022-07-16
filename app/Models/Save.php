<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Save extends Model
{
    use HasFactory;
        protected $fillable = [
        'topic',
        'user_id',
        'type'
        ];
public function user()
  {
      return $this->belongsTo(User::class);
  }
}