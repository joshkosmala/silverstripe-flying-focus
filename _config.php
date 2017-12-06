<?php

define('MODULE_FLYINGFOCUS_DIR', basename(dirname(__FILE__)));
/**
 * Check if the module folder exists.
 */
if (basename(dirname(__FILE__)) != MODULE_FLYINGFOCUS_DIR) {
    throw new Exception(MODULE_FLYINGFOCUS_DIR . ' not configured correctly');
}
