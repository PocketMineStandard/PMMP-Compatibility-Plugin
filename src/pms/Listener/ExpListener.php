<?php
/**
 * Created by PhpStorm.
 * User: NM
 * Date: 2017/8/8
 * Time: 9:02
 */

namespace pms\Listener;


use pms\Handle\ExpHandle;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;

class ExpListener extends pmsListenerBase implements Listener{

    public function __construct(ExpHandle $handle){
        parent::__construct($handle);
    }

    public function onPlayerDeath(PlayerDeathEvent $e){

    }

}