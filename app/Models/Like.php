<?php

namespace App\Models;

use App\Models\Contracts\BelongsToAUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Events\LikeCreated;
use App\Events\LikeDeleted;

class Like extends Model implements BelongsToAUser
{
    use HasFactory,
        Concerns\BelongsToAUser;

    protected $dispatchesEvents = [
        'created' => LikeCreated::class,
        'deleted' => LikeDeleted::class,
    ];

    public function likeable()
    {
        return $this->belongsTo(Likeable::class);
    }
}
