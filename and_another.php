<?php
$a="";
if(isset($_POST["json"])){
    $a = $_POST["json"];
}

$arr = json_decode(stripslashes($a), true);

$arr[4]=array( "name" => "user4", "age" => "28");
print_r($arr);
echo "<ul>";
for ($i=0; $i <count($arr) ; $i++)
{
echo "<li>";
echo $arr[$i]["name"];
echo " ";
echo $arr[$i]["age"];
echo "</li>";
}
echo "</ul>";

?>
