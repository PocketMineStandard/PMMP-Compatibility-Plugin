<?php
/**
 * Created by PhpStorm.
 * User: NM
 * Date: 2017/8/8
 * Time: 8:54
 */

namespace pms\Handle;


use pms\Listener\ExpListener;
use pms\Loader;

class ExpHandle extends HandleBase
{

    private $listener;

    public function __construct(Loader $plugin)
    {
        parent::__construct($plugin);
        $this->listener = new ExpListener($this);
    }

}