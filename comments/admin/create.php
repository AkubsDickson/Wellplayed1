<?php 

if (isset($_POST['create'])) {
	include "../config.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$name = validate($_POST['name']);
	

	$user_data = 'name='.$name;

	if (empty($name)) {
		header("Location: ../index1.php?error=Name is required&$user_data");
	}else {

       $sql = "INSERT INTO users(name) 
               VALUES('$name')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../read.php?success=successfully created");
       }else {
          header("Location: ../index1.php?error=unknown error occurred&$user_data");
       }
	}

}