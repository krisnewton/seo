<?php

function sd_breadcrumb($breadcrumb = [])
{
	$data = [];
	$data['@context'] = 'https://schema.org';
	$data['@type'] = 'BreadcrumbList';

	$data['itemListElement'] = [];

	$data['itemListElement'][] = [
		'@type' 	=> 'ListItem',
		'position' 	=> 1,
		'name' 		=> 'Beranda',
		'item' 		=> route('home')
	];

	$pos = 2;

	foreach ($breadcrumb as $anchor => $url) {
		if (empty($url)) {
			$data['itemListElement'][] = [
				'@type' 	=> 'ListItem',
				'position' 	=> $pos,
				'name' 		=> $anchor
			];
		}
		else {
			$data['itemListElement'][] = [
				'@type' 	=> 'ListItem',
				'position' 	=> $pos,
				'name' 		=> $anchor,
				'item' 		=> $url
			];
		}

		$pos++;
	}

	$data = json_encode($data, JSON_UNESCAPED_SLASHES);
	return $data;
}

function sd_searchbox($url = '')
{
	$data = [];
	$data['@context'] = 'https://schema.org';
	$data['@type'] = 'WebSite';
	$data['url'] = route('home');
	$data['potentialAction'] = [
		'@type' 		=> 'SearchAction',
		'target' 		=> $url . '?q={search_term_string}',
		'query-input' 	=> 'required name=search_term_string'
	];

	$data = json_encode($data, JSON_UNESCAPED_SLASHES);
	return $data;
}

?>