<?php
/**
 * Meta base class for plugin
 */

namespace deartwentyeight\dear\wordpress;

defined('ABSPATH') or die('Ready for fun? :-) ');

trait MetaTrait {



    public function addMethod($methodName, $methodCallable) {
    }

    public function __call($methodName, array $args) {
    }
	
}