<?php
/**
 * Created by PhpStorm.
 * User: thuan
 * Date: 10/28/2014
 * Time: 10:01 AM
 */

class Vote extends Eloquent{

    protected $table = 'votes';
    protected $primaryKey = 'vote_id';
    public $timestamps = false;
} 