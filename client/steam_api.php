<?php
	function steam_achievements($url,$hkey,$ukey,$steamid,$appid){
		$raw=file_get_contents($url.'/achievements.php?key='.$hkey.'&ukey='.$ukey.'&steamid='.$steamid.'&appid='.$appid);
		$raw_array=json_decode($raw,true);
		$return=$raw_array['playerstats'];
		unset($return['achievements']['success']);
		$return['appID']=$appid;
		return $return
	}
	function steam_friends($url,$hkey,$ukey,$steamid,$relationship){
		$raw=file_get_contents($url.'/friends.php?key='.$hkey.'&ukey='.$ukey.'&steamid='.$steamid.'&relationship='.$relationship);
		$raw_array=json_decode($raw,true);
		$return=$raw_array['friendslist']['friends'];
		return $return
	}
	function steam_owned_games($url,$hkey,$ukey,$steamid,$include_appinfo=1){
		$raw=file_get_contents($url.'/owned_games.php?key='.$hkey.'&ukey='.$ukey.'&steamid='.$steamid.'&include_appinfo='.$include_appinfo);
		$raw_array=json_decode($raw,true);
		$return=$raw_array['response'];
		return $return
	}
	function steam_recently($url,$hkey,$ukey,$steamid){
		$raw=file_get_contents($url.'/recently.php?key='.$hkey.'&ukey='.$ukey.'&steamid='.$steamid);
		$raw_array=json_decode($raw,true);
		$return=$raw_array['response'];
		return $return
	}
	function steam_statistic($url,$hkey,$ukey,$steamid,$appid){
		$raw=file_get_contents($url.'/statistic.php?key='.$hkey.'&ukey='.$ukey.'&steamid='.$steamid.'&appid='.$appid);
		$raw_array=json_decode($raw,true);
		$return=$raw_array['playerstats'];
		return $return
	}
	function steam_summaries($url,$hkey,$ukey,$steamid){
		$raw=file_get_contents($url.'/summaries.php?key='.$hkey.'&ukey='.$ukey.'&steamid='.$steamid);
		$raw_array=json_decode($raw,true);
		$return=$raw_array['response']['players'][0];
		return $return
	}
?>
