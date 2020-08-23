<?php

function og_title($title = '')
{
	return '<meta property="og:title" content="' . $title . '">';
}

function og_type($type = 'website')
{
	return '<meta property="og:type" content="' . $type . '">';
}

function og_url($url = '')
{
	return '<meta property="og:url" content="' . $url . '">';
}

function og_image($image = '', $secure = false, $data = [])
{
	$output = '<meta property="og:image" content="' . $image . '">';

	if ($secure) {
		$output .= '<meta property="og:image:secure_url" content="' . $image . '">';
	}

	if (!empty($data['type'])) {
		$output .= '<meta property="og:image:type" content="' . $data['type'] . '">';
	}

	if (!empty($data['width'])) {
		$output .= '<meta property="og:image:width" content="' . $data['width'] . '">';
	}

	if (!empty($data['height'])) {
		$output .= '<meta property="og:image:height" content="' . $data['height'] . '">';
	}

	if (!empty($data['alt'])) {
		$output .= '<meta property="og:image:alt" content="' . $data['alt'] . '">';
	}

	return $output;
}

function og_description($description = '')
{
	return '<meta property="og:description" content="' . $description . '">';
}

function og_locale($locale = 'id_ID')
{
	return '<meta property="og:locale" content="' . $locale . '">';
}

function og_site_name()
{
	return '<meta property="og:site_name" content="' . setting('app.name') . '">';
}

function tc_card($card = 'summary')
{
	return '<meta name="twitter:card" content="' . $card . '">';
}

function tc_title($title = '')
{
	return '<meta name="twitter:title" content="' . $title . '">';
}

function tc_description($description = '')
{
	return '<meta name="twitter:description" content="' . $description . '">';
}

function tc_image($image = '', $alt = '')
{
	$output = '<meta name="twitter:image" content="' . $image . '">';

	if (!empty($alt)) {
		$output .= '<meta name="twitter:image:alt" content="' . $alt . '">';
	}

	return $output;
}

?>