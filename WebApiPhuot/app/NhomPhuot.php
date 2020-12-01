<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\LoTrinh;
class NhomPhuot extends Model
{
    public $timestamps = false;
    protected $table = 'nhom_phuots';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'message',
        'image',
    ];

    public function LoTrinhs() {
        return $this->hasMany('App\LoTrinh', 'nhom_id', 'id');
    }

    public function ThanhVienNhoms() {
        return $this->hasMany('App\ThanhVienNhom', 'nhom_id', 'id');
    }
    
    
}
