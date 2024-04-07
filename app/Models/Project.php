<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    // use HasFactory, SoftDeletes;

    protected $fillable = [
        'type_id',
        'title',
        'content',
        'link'
    ];

    public function type() {
        return $this->belongsTo(Type::class);
    }
}
