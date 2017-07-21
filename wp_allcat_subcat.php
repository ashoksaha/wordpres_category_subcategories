<?php
include "wp-load.php";
// prior to wordpress 4.5.0
$args = array(
    'number'     => $number,
    'orderby'    => $orderby,
    'order'      => $order,
    'hide_empty' => $hide_empty,
    'include'    => $ids
);

$product_categories = get_terms( 'product_cat', $args );

// since wordpress 4.5.0
$args = array(
    'taxonomy'   => "product_cat",
    'number'     => $number,
    'orderby'    => $orderby,
    'order'      => $order,
    'hide_empty' => $hide_empty,
    'include'    => $ids,
	'url'		 =>	$url
);
$product_categories = get_terms($args);

echo "<pre>";
print_r($product_categories);
echo "</pre>";

//$category_id

$category_link = get_category_link(964);

//$items = array();
$i=1;
foreach($product_categories as $username) {
 $items = $username->term_id;
 echo $category_link = get_category_link($items);
 echo "</br>";
 $i++;
}

//print_r($items);
