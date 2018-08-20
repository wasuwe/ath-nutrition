<?php
    $date = date("Y/m/d");
    $date1 = str_replace('-', '/', $date);
    $tomorrow = date('Y/m/d',strtotime($date1 . "+1 days"));
    
    echo $tomorrow;
?>