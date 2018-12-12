<?php

class App 
{
	protected static $registry = array();

	public static function bind($key, $value)
	{
		static::$registry[$key] = $value;
	}

	public static function get($key)
	{
		if(!array_key_exists($key, static::$registry)){
			throw new Exception("no key");
			
		}
		return static::$registry[$key];
	}
}