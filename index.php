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
//unset($b);
//echo 'type of $a is ',gettype($a);
//if (isset($b)) {echo '<br>$b is create, $b=',$b;}else{echo'<br>$b is not create';};
//if (!isset($_GET['send'])){
//    echo file_get_contents('form.php');
//    die();
//}


echo $b;
echo '<br>';
$link_on_b = &$b;
echo '$link_on_b=',$link_on_b;

//My english dictiionary
if (!mysql_connect('krruda.mysql.tools','krruda_words','kxyt2xm7')) die('error');
echo '<br>connection to DB is good!';
echo '<br>You OS is <b>', PHP_OS,'</b>';
echo '<br>You PHP ver. is <b>',PHP_VERSION,'</b>';
echo '<br>';
$predir='You are <b>';
$dir=`whoami`;
echo $predir.$dir.'</b>';
echo '<br>';
for ($i=0;$i< iconv_strlen($dir);$i++) 
{
    if ($i%2===0) {
echo $dir[$i],'<br>';
    }
}

$name = $_GET['name'];
echo '<br> Hello ',$name;
echo ' you IP is ', getenv("REMOTE_ADDR");
echo "<br> you browser is ". getenv(HTTP_USER_AGENT);
//header("Location: https://www.google.com.ua");
