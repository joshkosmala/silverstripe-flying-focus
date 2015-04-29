<?php
	
class FlyingFocusExtension extends Extension {
	
	public function onBeforeInit() {
		// Include Flying Focus JavaScript TODO Change to dynamic URL segment
		Requirements::javascript('flyingfocus/javascript/flying-focus.js');
	} 
	
}

