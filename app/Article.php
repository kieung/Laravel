<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    //all attributes in here should be fields that can be changed or filled
    //in by a user.

    	'title',
    	'body'

    ];
}
