<?php


require('./libs/Smarty.class.php');


define('CACHE_LIFETIME_DEFAULT', 3600);
$smarty = new Smarty;
$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'templates_c/';
$smarty->config_dir = 'i18n/';

$smarty->debugging = false;
$smarty->caching = false;
$smarty->cache_lifetime = 20;
$smarty->cache_dir = 'cache/';
/*
if (DEBUG == FALSE) {
    $smarty->caching = 2;
} else {
    $smarty->caching = 0;
}
*/
$smarty->compile_check = TRUE;
$smarty->cache_lifetime = CACHE_LIFETIME_DEFAULT;

function smarty_modifier_stripslashes($string){
 return $stripslashes($string);
}

