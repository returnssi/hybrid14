<!-- ⓒ OdinBOX, 최영환 -->
<?php 
  include "connectFile.php";
?>
<?php
    $myArray = array();
    $result = mq("SELECT * FROM `테이블명`");
    while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $myArray[] = $row;
    }
    echo json_encode($myArray);
?>
