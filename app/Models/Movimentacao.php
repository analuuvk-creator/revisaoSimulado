<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movimentacao extends Model
{
    protected $fillable = [
        'quantidade',
        'data_movimentacao',
        'tipo',
        'produto_id',
        'user_id'
    ];

    public function produtos(): BelongsTo {
        return $this->belongsTo(Produto::class);
    }

    public function users(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
