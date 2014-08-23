<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('css_url'))
{
	function css_url($name)
	{
		return base_url() . 'assets/css/' . $name . '.css';
	}
}

if ( ! function_exists('js_url'))
{
	function js_url($name)
	{
		return base_url() . 'assets/javacript/' . $name . '.js';
	}
}

if ( ! function_exists('img_url'))
{
	function img_url($name)
	{
		return base_url() . 'assets/images/' . $name;
	}
}

if ( ! function_exists('img'))
{
	function img($name, $alt = '')
	{
		return '<img src="' . img_url($name) . '" alt="' . $alt . '" />';
	}
}

if ( ! function_exists('doc_url'))
{
	function doc_url($name)
	{
		return base_url() . 'assets/documents/' . $name;
	}
}