<?php
defined('BASEPATH') OR die('Access denied!');

if (!function_exists('_t')) {
	function _t($key, $param = '') {
		$CI		= & get_instance();
		$value	= $CI->lang->line(strtolower(trim($key)));
		
		if (empty($value) || $value == FALSE) {
			$value = strtolower($key);
		}
		
		return $value;
	}
}
