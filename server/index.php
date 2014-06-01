<?php
include('error.php');
require('config.php');
require('func.make_query.php');
$log=array('ip'=>$_SERVER['REMOTE_ADDR'],'api'=>'index','date'=>date('d-m-Y H:i:s'),'url'=>$url);
make_query(true,'insert','steamapi_logs',$log);
?>
