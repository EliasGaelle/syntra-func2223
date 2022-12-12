<?php 
function showFuturTime($extra_time = 0){
    $current_time = time() + $extra_time;
    //$current_time = time() + (6*60*60);
    $str = date(" d/m/y - H\hi\ms\s", $current_time);
    return $str ;

}
echo showFuturTime(48000). "<br \>";
 ?>