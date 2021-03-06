<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\ChiTietNhom;
use App\BaiViet;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function BaiViets(){
        return $this->hasMany('App\BaiViet', 'user_id', 'id');
    }

    public function NhomPhuots() {
        return $this->hasMany('App\NhomPhuot', 'nhom_id', 'id');
    }
    public function ChiTietNhom(){
        return $this->hashMany('App\ChiTietNhom','chitiet_id','id');

    }
}
