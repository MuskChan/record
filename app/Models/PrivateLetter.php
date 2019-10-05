<?php

namespace App\Models;

class PrivateLetter extends Model
{
    protected $fillable = ['content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
