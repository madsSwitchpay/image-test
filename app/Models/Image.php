<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $timestamps = false;
    protected $guarded = ['id'];
    protected $table = 'images';
    protected $primaryKey = 'id';
    protected $fillable = ['base64_image'];
    protected $hidden = [];
    protected $dates = ['timestamp'];
}
