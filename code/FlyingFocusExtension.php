<?php

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

class FlyingFocusExtension extends Extension {

	public function onAfterInit() {
		Requirements::javascript(MODULE_FLYINGFOCUS_DIR.'/javascript/flying-focus.js');
	}

}
