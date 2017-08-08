<?php
/**
 * Created by PhpStorm.
 * User: NM
 * Date: 2017/8/8
 * Time: 9:08
 */

namespace pms\Handle;


use pms\Loader;

abstract class HandleBase
{

    private $plugin;

    public function __construct(Loader $plugin){
        $this->plugin = $plugin;
    }


    public function getPlugin(){
        return $this->plugin;
    }
}