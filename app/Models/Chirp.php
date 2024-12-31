<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Chirp extends Model
{
    use HasFactory;

    protected $fillable = [
        'message', 
        'media_path', 
        'media_type'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}