<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk extends Model
{   

    protected $fillable = [
        'name',
        'jenis',
        'bunga_id'
    ];

    public function bunga(): BelongsTo
    {
        return $this->belongsTo(Bunga::class);
    }
}
