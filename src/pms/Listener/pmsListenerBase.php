<?php
/**
 * Created by PhpStorm.
 * User: NM
 * Date: 2017/8/8
 * Time: 9:11
 */

namespace pms\Listener;


use pms\Handle\HandleBase;
use pocketmine\event\Listener;

abstract class pmsListenerBase implements Listener {

    public $handle;

    public function __construct(HandleBase $handle){
        $this->handle = $handle;
        $this->getPlugin()->getServer()->getPluginManager()->registerEvents($this,$this->getPlugin());
    }

    public function getHandle(){
        return $this->handle;
    }

    public function getPlugin(){
        return $this->getHandle()->getPlugin();
    }
}