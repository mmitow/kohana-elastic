<?php

 spl_autoload_register(function($class)
 {
	 try
	 {
		 // Replace underscores with directory separators
		 $class = str_replace('_', DIRECTORY_SEPARATOR, $class);

		 if ($file = Kohana::find_file('vendor/elastica/lib', $class))
		 {
			 require_once $file;

			 return TRUE;
		 }

		 return FALSE;
	 }
	 catch(ErrorException $e)
	 {
		 Kohana_Exception::handler($e);
		 die;
	 }
 });