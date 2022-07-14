<?php
$con=mysqli_connect('localhost','root','','rate');
require 'simple_html_dom.php';

$html = file_get_html('https://www.bank-of-algeria.dz/');
// foreach($html->find('marquee') as $p) {
//         $p->removeAttribute('style');    
//         $p->removeAttribute('behavior');    
//         $p->removeAttribute('scrolldelay');    
//         $p->removeAttribute('scrollamount');    
//         $p->removeAttribute('border'); 
           

// }
$content = $html->find('marquee.style23');

$comma_separated = implode(",", $content);
//preg_match('<marquee class="style23">(*?)</marquee>', $html, $match);
$notag=strip_tags($comma_separated);
//echo $comma_separated;
// echo $notag;
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
// echo "<br>";
$getlastData="SELECT * FROM rate WHERE id=(SELECT MAX(id) FROM rate)";

$rungetlastData=mysqli_query($con,$getlastData);

$getlastDataRow=mysqli_fetch_assoc($rungetlastData);

$lastdatausd=$getlastDataRow['rateusd'];

$lastdataeuro=$getlastDataRow['rateeuro'];

$str=$notag;

$str1 = substr($str, 6, 17);

$str2 = substr($str, 33, 17);

if($str1 != $lastdatausd){

    $query="INSERT INTO rate(rateusd) VALUES ('{$str1}') ";

    $query_run=mysqli_query($con,$query);

}
if($str2 != $lastdataeuro){

    $query="INSERT INTO rate(rateeuro) VALUES ('{$str2}') ";

    $query_run=mysqli_query($con,$query);

}



// $getData='SELECT * from rate where id=1';
// $rungetData=mysqli_query($con,$getData);
// if(!$rungetData ) {
          
//     die("QUERY FAILED ." . mysqli_error($con));

    
// }
// $row=mysqli_fetch_assoc($rungetData);
// $str=$row['rate'];
// $str1 = substr($str, 6, 17);
// echo $str1;
// echo "<br>";
// echo "<br>";
// echo "<br>";
// $str2 = substr($str, 33, 17);
// echo $str2;
?>