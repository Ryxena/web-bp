<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PostLike extends Model
{
    use HasFactory;
    protected $fillable = [
        "post_id",
        "owner_id"
    ];

    protected $guarded = [];
}
