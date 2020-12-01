<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThanhVienNhom extends Model
{
    public $timestamps = true;
    protected $table = 'thanh_vien_nhoms';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nhom_id',
        'user_id',
        'status'
    ];


    public function User() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function NhomPhuot() {
        return $this->belongsTo('App\NhomPhuot', 'nhom_id', 'id');
    }
}
