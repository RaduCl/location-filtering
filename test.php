<?php

require_once('RangeFilter.php');

$db = new RangeFilter;

$res = $db->getItemsInRange('category', '15');

foreach($res as $r) {
    echo $r['name']."\n";
}

