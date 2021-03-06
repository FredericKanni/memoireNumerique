<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mediatype extends Model
{
    protected $table = 'mediatype';
  
    protected $fillable = ['id', 'type'];

    public $timestamps = false;

    public function memoires()
    {
      return  $this->hasMany(Memoire::class, 'id_media');
    }

}
