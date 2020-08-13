<?php




namespace App;
namespace App\Model;
use Illuminate\Database\Eloquent\Model;

class Customer extends  Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $table="customers";
    protected $fillable = [
        'name', 'email', 'password','phone','default_address','status','type','channel_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

  
    public function addresses()
    {
        return $this->hasMany(\App\Model\Address::class, 'customer_id');
    }

   


}