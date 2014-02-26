<?php

namespace hikari\controller;

/**
 * Example core lib override
 * @todo Move to demo app
 */
class Controller extends ControllerAbstract {

    function run() {
    	if($this->action->id == 'hello') {
    		echo 'hello world';
    		die;
    	}
    	return parent::run();
    }
}
