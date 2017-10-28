<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//if (!mysql_connect('localhost','root','')) die('error');
//echo "Connect successful";

$a=[1,4];
$b= pi();
unset($b);
echo 'type of $a is ',gettype($a);
if (isset($b)) {echo '<br>$b is create, $b=',$b;}else{echo'<br>$b is not create';};

echo '<br>';
$link_on_b = &$b;
echo '$link_on_b=',$link_on_b;

//My english dictiionary
if (!mysql_connect('krruda.mysql.tools','krruda_words','kxyt2xm7')) die('error');