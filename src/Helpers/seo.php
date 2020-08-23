<?php

function meta_description($text = '')
{
	return '<meta name="description" content="' . $text . '">';
}

function canonical($url = '')
{
	return '<link rel="canonical" href="' . $url . '">';
}

function nextpage($url = '')
{
	return '<link rel="next" href="' . $url . '">';
}

function prevpage($url = '')
{
	return '<link rel="prev" href="' . $url . '">';
}

?>