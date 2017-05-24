<?php
$upload = $_FILES['upload'];
 if ($upload['error']==0) {
     echo $upload['name'];
     if (copy(
         $upload['temp_name'],
         "./upload/{$upload['name']}")) {
         echo 'Upload OK';
     } else {
         echo 'Copy Fail';
     }

 }else{
     echo'Upload Fail';

 }