<?php
ld('/func/mda');

function get($name=false){
	if($name === false) return $_GET;
	return mda_get($_GET,$name);
}

function post($name=false){
	if($name === false) return $_POST;
	return mda_get($_POST,$name);
}

function req($name=false){
	if($name === false) return $_REQUEST;
	return mda_get($_REQUEST,$name);
}

function server($name=false){
	if($name === false) return $_SERVER;
	return mda_get($_SERVER,$name);
}

function session($name,$value=false){
	if($value !== false) mda_set($_SESSION,$name,$value);
	return mda_get($_SESSION,$name);
}

function session_delete(){
	$args = func_get_args();
	foreach($args as $name) unset($_SESSION[$name]);
	return true;
}
