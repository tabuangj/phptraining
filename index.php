<form method="POST" action="index.php">
    <input type="text" name="datatext" value="">
    <input type="submit">
</form>
<?php
 $data1 = array('data1'=>['1','2','3'],'data2'=>['1'=>['ฉันอยู่นี่'],'2','3'],'data3'=>['1','2','3']);
 var_dump($data1);
 echo $data1['data2'][1][0];

?>