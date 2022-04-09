<?php

namespace Plugins\monospaceEditor;

use \Typemill\Plugin;

class monospaceEditor extends Plugin
{	
    public static function getSubscribedEvents()
    {
		return array(
			'onTwigLoaded' 			=> 'onTwigLoaded'
		);
    }
		
	public function onTwigLoaded()
	{
		if($this->adminpath)
		{
			$this->addCSS('/monospaceEditor/public/style.css');	
		}
		
	}
}