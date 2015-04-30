<?php
	
class FlyingFocusExtension extends Extension {
	
	public function onAfterInit() {
		// Include Flying Focus JavaScript TODO Change to dynamic URL segment
		Requirements::javascript('flyingfocus/javascript/flying-focus.js');
	} 
	
}

