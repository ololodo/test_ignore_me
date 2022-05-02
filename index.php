<?php //encoding UTF-8
function s_add($x,$y){
    return($x+$y);
};
session_start();
$sid=session_id();
echo(sprintf("%s+%s=%s\n",1,1,s_add(1,1)));
//
?>