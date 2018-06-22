<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function adjustments()
    {
        return $this->belongsToMany(User::class, 'adjustments')
            ->withTimestamps()
            ->latest('pivot_updated_at');
    }
}
