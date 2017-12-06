<?php

use SilverStripe\Core\Extension;
use SilverStripe\View\Requirements;

class FlyingFocusExtension extends Extension {

	public function onAfterInit() {
		Requirements::javascript('flyingfocus: /javascript/flying-focus.js');
	}

}
