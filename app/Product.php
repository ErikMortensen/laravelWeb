<?php

namespace App;

use App\Cart;
use App\Order;
use App\Image;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    
    protected $fillable = [
        'title',
        'description',
        'price',
        'stock',
        'status',
    ];


    public function carts(){
        return $this->morphedByMany(Cart::class, 'productable')->withPivot('quantity');
    }

    public function orders(){
        return $this->morphedByMany(Order::class, 'productable')->withPivot('quantity');
    }

    public function images(){
        return $this->morphMany(Image::class, "imageable");
    }

    public function scopeAvailable($query){
        $query->where('status', 'available');
    }
}
