<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
*
 * @property int user_id
 * @property string title
 * @property string detail
*/
class Post extends Model
{
    use HasFactory;

	protected $fillable  = ['user_id', 'title', 'detail'];
}
