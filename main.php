 <?php

	$dir=getcwd().'Users\Scripter\Downloads'.'\\';
	//echo $dir;
	


	$result=scandir($dir);
	
	$num=count($result)-1;


	$num2=0;
	//print_r($result);
	$num3=0;
	while ($num2<=$num) {

		
			$result1=$result[$num2];
			$dir1=$dir.$result1;

			
			$resulting_info=pathinfo($dir1);
					
			if (!is_dir($dir1) && !empty($resulting_info['extension'])) {
					
					
						$resulting_info=pathinfo($dir1);
						


						//print_r($resulting_info);

						if ($resulting_info['extension']==='mp4' || $resulting_info['extension']=='MP4' && $resulting_info['extension']!==NULL  || $resulting_info['extension']=='3gp'  || $resulting_info['extension']=='3GP'  || $resulting_info['extension']=='avi'  || $resulting_info['extension']=='flv'
					 || $resulting_info['extension']=='wmv') {
							
							$name_array[]=[

								$resulting_info['basename']

							];

							$url_array[]=[

								$dir1
							];
							$num3++;
						

						}


			}else{

				
			}

			$num2++;

		}

		//print_r($name_array);

		//print_r($url_array[0][0]);
		$num3=count($url_array)-1;
		$num4=0;

		while ($num4<=$num3) {
			
			

			$oldpath=getcwd().'Users\Scripter\Videos\\'.$name_array[$num4][0];
			// echo($name_array[$num4][0]);
			// echo "\n";
			// echo "\n";
			// echo "\n";
			$filepath=$url_array[$num4][0];
			$num4++;
			// echo($num4);
			// echo('\n');
			$copy=copy($filepath,$oldpath);

			if ($copy) {
				
				echo("successfully copied".$name_array[$num4][0]);
				echo("\n\n");
				$delete=unlink($filepath);

				if ($delete) {
					# code...
					echo("\n\n");
					echo("deleted ".$name_array[$num4][0]);
				}else{

					echo("could not be deleted");
				}
 }
			else{

				die("error copying ");
			}
		
		// echo $oldpath;
		// echo"\n\n";
		// echo($filepath);
		//echo("\n\n");
 }


		// print_r($main_array);
	// 	 	print_r($url);

		// echo('the count         '.count($url));

		// echo('     the second count    '.count($main_array).'\n');
		// echo($new_num);
	

	// $move=copy('C:\xampp\htdocs\ola\main.txt','C:\new\main.txt');

	// if ($move) {
	// 	# code...
	// 	$delete=unlink('C:\xampp\htdocs\ola\main.txt');
	// 	echo("success on copying\n");

	// 	if ($delete) {
	// 		# code...
	// 		echo('deleted successfully');
	// 	}
	// 		}else{

	// 	echo"not successful";
	// }


   




?>