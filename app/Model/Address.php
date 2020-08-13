<?php

namespace App;
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{

    public $table="address";

    protected $fillable = [
        'name', 'address', 'area','city','phone','customer_id'
    ];


    public function customer()
    {
        return $this->belongsTo(\App\Model\customer::class, 'customer_id');
    }


}