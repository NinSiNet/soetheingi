	<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$gender=$_POST['gender'];
	$township=$_POST['township'];
	$grade=$_POST['grade'];
	$subject=$_POST['subject'];
	


  
    // //uploaded file
  
    // $fullpath=$basepath.$profile['name'];

    // move_uploaded_file($profile['tmp_name'],$fullpath);

    //echo
    
 
    //create array
    $student= array(
        "name"=>$name,
        "email"=>$email,
        "phone"=>$phone,
        "gender"=>$gender,
		"township"=>$township,
		"grade"=>$grade,
	    "subject"=>$subject);

    


    //get jsonDate from json file

    $jsonDate = file_get_contents('studentlist.json');

    if(!$jsonDate){
        $jsonDate = '[]';
    }

    //convert into array from json
    $data_arr=json_decode($jsonDate);

    array_push($data_arr, $student);
    $jsonDate=json_encode($data_arr,JSON_PRETTY_PRINT);

    file_put_contents('studentlist1.json', $jsonDate);

    header("location:studentform1.php");




}
?>