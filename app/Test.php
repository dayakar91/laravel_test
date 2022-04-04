<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  

class Test extends Model
{
    //
	use SoftDeletes;
	
	protected $table="test";
	protected $primaryKey="id";
	protected $dates=['delete_at'];
}
