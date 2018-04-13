<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = "menus";

    public function getLeftMenu()
    {
        return $this->orderBy('weight')->published()->left()->get();
    }

    public function getRightMenu()
    {
        return $this->orderBy('weight')->published()->right()->get();
    }

    public function scopePublished($guery)
    {
        $guery->where(['active'=>'1']);
    }

    public function scopeLeft($guery)
    {
        $guery->where(['position'=>'left']);
    }

    public function scopeRight($guery)
    {
        $guery->where(['position'=>'right']);
    }
}
