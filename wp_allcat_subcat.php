<?php
include "wp-load.php";

function GetAllCategoryWP(){
		
		$args = array(
		'number'     => $number,
		'orderby'    => $orderby,
		'order'      => $order,
		'hide_empty' => $hide_empty,
		'include'    => $ids
		);

	$categories = get_terms( 'product_cat', $args );


	$args = array(
		'taxonomy'   => "product_cat",
		'number'     => $number,
		'orderby'    => $orderby,
		'order'      => $order,
		'hide_empty' => $hide_empty,
		'include'    => $ids,
		'url'		 =>	$url
	);
	$categories = get_terms($args);

	$i=1;
	foreach($categories as $username) {
	 $items = $username->term_id;
	 echo $category_link = get_category_link($items);
	 echo "</br>";
	 $i++;
		}
}

GetAllCategoryWP();
