<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class MY_Router extends CI_Router
{	
	function _parse_routes()
	{
		$uri	= $this->uri->segments;

		//First segment have 2 chars (language chars)
		if (isset($uri[1]) && preg_match('/[a-zA-Z]{2}/', $uri[1])) {
			unset($uri[1]);
		}
		$uri	= implode('/', $uri);

		foreach ($this->routes as $key => $val) {
			$_key = str_replace(array(':any', ':num'), array('[^/]+', '[0-9]+'), $key);
			if (preg_match('#^'.$_key.'$#', $uri, $matches)) {
				$val = preg_replace_callback("/[\$]{1}[0-9]+/", function($matches)
				{
					$num = (int)str_replace('$', '', array_shift($matches));
					return '$'.($num + 1);
				}, $val);

				//add language route to current route uri
				$this->routes['^([a-zA-Z]{2})/'.$key] = $val;
				unset($this->routes[$key]);
			}
		}

		if (count($matches) == 0) $this->routes['^([a-zA-Z]{2})/(.+)$']	= '$2';
		$this->routes['^([a-zA-Z]{2})$']	= $this->default_controller;

		parent::_parse_routes();
	}
}