<?php 



include 'Config.php';

header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json");

$c1 = new Config();

if($_SERVER['REQUEST_METHOD'] == "POST"){
  $name = $_REQUEST['name'];
  $email = $_REQUEST['email'];
  $phone = $_REQUEST['phone'];

 $res =  $c1->insertDatabase($name, $email, $phone);
 if($res){
    $arr['status'] = "Record insertaion successfully!!";
    echo json_encode($arr);
 }else{
    $arr['error'] = "Record insertaion failed!!";
    echo json_encode($arr);
 }
}
else{
    $arr['msg'] = "Only POST method is allowed !!";
    echo json_encode($arr);
}





?>