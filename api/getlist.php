<?php
include_once "../base.php";
$news=$News->all(['type'=>$_GET['i']]);
foreach($news as $n){
    echo "<a href='javascript:getpost({$n['id']})'>{$n['title']}</a></br>";
}
