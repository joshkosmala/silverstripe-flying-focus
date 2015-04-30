<?php
	
class FlyingFocusExtension extends Extension {
	
	public function onAfterInit() {
		Requirements::javascript(MODULE_FLYINGFOCUS_DIR.'/javascript/flying-focus.js');
	} 
	
}

