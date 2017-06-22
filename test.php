<?
$array_data = array(10,20,10,2.5,2.5,5,10,10,10,5,5);
$array_data = array(30,25,5,10,10,13,7,5,5,5,2.5,2.5);
$array_sum =array_sum($array_data);
$people = 3;
echo $array_sum;
	echo '<br>';
if($array_sum%$people == 0){ 
	rsort($array_data); /// เรรียงจากมากไปน้อย
	$balance = $array_sum/$people;
	if($array_data[0]>$balance){
	    echo 'false';
	}else{
		
		$array_data2 = $array_data;
		echo $balance.'<br>';
		for($i=1;$i<=$people;$i++){ 
			$remain = $balance;
			 foreach ($array_data2 as $key => $value) {
			 	$remain -= (array_sum($box[$i])+$value);
				echo ' -- <br>';
			 	print_r($remain);echo ' -- <br>';
			 	if(array_sum($box[$i])+$value <= $balance){
			 		$box[$i][] = $value;
			 		//echo $value.'<br>';
			 		unset($array_data2[$key]);
			 			echo '<pre>';
					echo '<pre>';
		    		print_r($remain);
				     echo '</pre>';
			 	} 
			 }
		}
	}








	echo '<pre>';
	print_r($box);
	echo '</pre>';
	echo 'true';

}else{
	echo 'false';
}



?>