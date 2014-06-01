<?php
require('config.php');
require('func.make_query.php');
if($config['api-hkey']==$_GET['key']){
	if(isset($_GET['steamid'])){
		$url='http://api.steampowered.com/IPlayerService/GetRecentlyPlayedGames/v0001/?key='.$config['api-key'].'&steamid='.$_GET['steamid'];
		echo file_get_contents($url);
		$log=array('ip'=>$_SERVER['REMOTE_ADDR'],'api'=>'recently','date'=>date('d-m-Y H:i:s'),'url'=>$url);
		make_query(true,'insert','steamapi_logs',$log);
	}else{
		include('error.php');
	}
}else{
	include('error.php');
}
?>
