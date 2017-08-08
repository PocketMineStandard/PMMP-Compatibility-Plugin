<?php

/**
 *
 * PocketMine Standard - PMMP Compatibility Plugin
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * @author PocketMine Standard Team
 * @link https://github.com/PocketMineStandard
 *
 */

namespace pms;

use pms\Handle\ExpHandle;
use pocketmine\plugin\PluginBase;

class Loader extends PluginBase{
    public $ExpHandle;

    /*
     * startup
     */
	public function onLoad(){
        $this->getServer()->getLoader()->addPath($this->getFile() . "src\pocketmine");
        
    }
	public function onEnable(){
		$this->initHandle();
	}

    public function getInstance(){
	    return self::class;
    }

    /*
     * init
     * @return true
     */
    public function initHandle(){//TO DO:ADD CONFIG
	    $this->ExpHandle = new ExpHandle($this);
	    return true;
    }

    /*
     * get ExpHandle Object
     * @return ExpHandle
     */
    public function getExpHandle(){
        return $this->ExpHandle;
    }
}