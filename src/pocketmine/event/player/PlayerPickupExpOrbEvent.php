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

namespace pocketmine\event\player;

use pocketmine\event\Cancellable;
use pocketmine\Player;

class PlayerPickupExpOrbEvent extends PlayerEvent implements Cancellable {
	public static $handlerList = null;

	private $amount;

	/**
	 * PlayerPickupExpOrbEvent constructor.
	 *
	 * @param Player $p
	 * @param int    $amount
	 */
	public function __construct(Player $p, int $amount = 0){
		$this->player = $p;
		$this->amount = $amount;
	}

	/**
	 * @return int
	 */
	public function getAmount() : int{
		return $this->amount;
	}

	/**
	 * @param int $amount
	 */
	public function setAmount(int $amount){
		$this->amount = $amount;
	}
}