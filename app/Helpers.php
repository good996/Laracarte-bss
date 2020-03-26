<?php
if(!function_exists('page_title')){
	function page_title($title){
		$base_title = config('app.name').' - list of artisans';
		if($title == ''){
			return $base_title;
		}else{
			return $title.' | '.$base_title;
		}
	}
}

if (!function_exists('set_route_active')) {
	# code...
	function set_route_active($route){
		return Route::current()->getName() == $route ? 'active' : '' ;
	}
}