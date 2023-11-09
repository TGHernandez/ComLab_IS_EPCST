<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


use App\Models\Category;
class Product extends Model
{

    use HasFactory;
    protected $fillable = ['id', 'category_id','name','description','qty'];

    protected $hidden = ['created_at','updated_at'];

    public function category() {
        return $this-> belongsTo(Category::class);
    }

}
