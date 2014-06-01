<?php
	function make_query($send=false,$type,$table,$array1,$array2=array(),$limit=''){
		if($type=="insert"){
			$no=0;
			$where=array();
			$what=array();
			foreach($array1 as $key => $value){
				$where[$no]="`".$key."`";
				$what[$no]="'".$value."'";
				$no++;
			}
			$where_ok=implode(',',$where);
			$what_ok=implode(',',$what);
			$sql="INSERT INTO `".$table."` (".$where_ok.")VALUES(".$what_ok.")";
		}elseif($type=="select"){
			$what='';
			foreach($array1 as $value){
				$what.=', `'.$value.'`';
			}
			$what = substr($what,1);
			$where='';
			foreach($array2 as $key => $value){
				$where.="AND `".$key."` = '".$value."'";
			}
			$where = substr($where,3);
			$sql="SELECT ".$what." FROM `".$table."` WHERE ".$where." ".$limit;
		}elseif($type=="update"){
			$what='';
			foreach($array1 as $key => $value){
				$what.=", `".$key."` = '".$value."'";
			}
			$what = substr($what,1);
			$where='';
			foreach($array2 as $key => $value){
				$where.="AND `".$key."` = '".$value."'";
			}
			$where = substr($where,3);
			$sql="UPDATE `".$table."` SET ".$what." WHERE ".$where;
		}elseif($type=="delete"){
			$where='';
			foreach($array1 as $key => $value){
				$where.="AND `".$key."` = '".$value."'";
			}
			$where = substr($where,3);
			$sql="DELETE FROM `".$table."` WHERE ".$where;
		}elseif($type=="count"){
			foreach($array1 as $value){
				$what=$value;
			}
			$where='';
			foreach($array2 as $key => $value){
				$where.="AND `".$key."` = '".$value."'";
			}
			$where = substr($where,3);
			$sql="SELECT COUNT(*) as `".$what."` FROM `".$table."` WHERE ".$where;
		}else{
		
		}
		if($send){
			return mysql_query($sql)or die(mysql_error());
		}else{
			return $sql;
		}
	}
?>
