<?php
/**
 * Created by PhpStorm.
 * User: thuan
 * Date: 10/28/2014
 * Time: 10:01 AM
 */

class Color extends Eloquent{

    protected $table = 'colors';
    protected $primaryKey = 'color_id';
    public $timestamps = false;

    public function votes()
    {
        return $this->hasMany('Vote');
    }
} 