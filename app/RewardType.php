<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Facades\Config;

class RewardType extends Model
{
    //
    protected $table, $primaryKey;
    public $timestamps = false;

    function __construct(array $attributes = array()) {
        parent::__construct($attributes);
        $this->table = Config::get('constants.tables.bounty.reward.name');
        $this->primaryKey = Config::get('constants.tables.bounty.reward.primary_key');
    }
}
