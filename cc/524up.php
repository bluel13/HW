<?php
$upload = $_FILES['upload524'];
 if ($upload['error']==0) {
     echo $upload['name'];
     if (copy(
         $upload['tmp_name'],
         "./upload524/{$upload['name']}")) {
         echo 'Upload OK';
     } else {
         echo 'Copy Fail';
     }

 }else{
     echo'Upload Fail';

 }