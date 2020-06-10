<form action="testarray.php" method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <input type="submit">
</form>
<?php

$data1 = array(['username'=>'tabuang','password'=>'1234','role'=>['1','2','3']]);

if(isset($_POST['username']) && isset($_POST['password'])){
    $dataresult = check_Condition($_POST['username'],$_POST['password'],$data1);
    if($dataresult == 'true'){
        echo "login success";
    }else{
        echo "Please Login again";
    }
}

function check_Condition($username,$password,$data){

    foreach ($data as $item){
        if ($item['username'] == $username){
                if($item['password'] == $password){
                    $datatext = 'true';
                }else{
                    $datatext = 'password';
                }
        }else{
            $datatext = 'username';
        }
    }
    return $datatext;
}

//for($x = 0; $x <= 2; $x++){
//    if($x == '1'){
//        echo "$data1[$x]<br>";
//    }
//
//}
//
//
//foreach ($data1 as $item){
//        if($item == '2'){
//            echo "$item<br>";
//        }
//}
//
//
//$i = 0;
//while ($i <= 2){
//    if($i == '1'){
//        echo "$data1[$i]<br>";
//    }
//    $i++;
//}