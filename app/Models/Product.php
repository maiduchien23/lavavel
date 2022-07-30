<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable =[
        'category_id',
        'product_name',
        'product_desc',
        'product_qty'
    ];
    public function categories(){
        return $this->belongsTo(Category::class,'category_id','id');
    }

}
