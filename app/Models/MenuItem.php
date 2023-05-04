<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
  protected $fillable = ['name', 'url', 'parent_id'];
  public $timestamps = ['created_at', 'updated_at'];
 
  public function children()
  {
    return $this->hasMany(Self::class, 'parent_id', 'id');
  }
}
