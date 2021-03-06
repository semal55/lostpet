<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
        'title',
        'address',
        'description'
    ];
    protected $hidden = [
        'address'
    ];

    public function images()
    {
        return $this->belongsToMany(Image::class, 'note_images');
    }
}
