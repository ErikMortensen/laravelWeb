<?php

namespace App;

use App\Image;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'path',
    ];

    public function imageable(){
        return $this->morphTo();
    }

    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }
}
