<?php
if(defined('mnminclude')){
	include_once('anonymous_settings.php');

	// tell plikli what pages this modules should be included in
	// pages are <script name> minus .php
	// index.php becomes 'index' and new.php becomes 'new'
	$include_in_pages = array('all');
	$do_not_include_in_pages = array();
	
	
	if( do_we_load_module() ) {		
		
	}
}	
?>