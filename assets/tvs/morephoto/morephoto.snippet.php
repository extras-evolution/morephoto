<?php
/* 
 * name - morephoto
 * author - Baydin Artem
 * version 1.0
 *
 * &src - json string [required]
 * &tpl - output tpl
 * &num - what image to show
 *
 */
 
if(empty($src)) return '&src id required field!';

$tpl = $tpl ? $tpl : '<img src="[+src+]">';
$num = $num ? $num : false;

$output='';
if($num===false){
  $srcArr = json_decode($src, true);
    
  if(is_array($srcArr['fieldValue'])){
    foreach($srcArr['fieldValue'] as $val){
      $output.= str_replace("[+src+]",$val['image'],$tpl);
    }
  }
  else return '&src must be json string!';

}else{
    $output = json_decode($src);
    $output = $output[(int)$num-1];
}
return $output;
?>