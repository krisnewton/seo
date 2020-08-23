<?php

function sharer_whatsapp($url = '')
{
	$url = 'https://wa.me/?text=' . urlencode($url);
	return $url;
}

function sharer_facebook($url = '')
{
	$url = 'https://www.facebook.com/sharer/sharer.php?u=' . urlencode($url);
	return $url;
}

function sharer_twitter($url = '')
{
	$url = 'https://twitter.com/intent/tweet?url=' . urlencode($url);
	return $url;
}

function sharer_telegram($url = '')
{
	$url = 'https://t.me/share/url?url=' . urlencode($url);
	return $url;
}

?>