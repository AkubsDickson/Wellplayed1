<?php

include "db_config.php";

$week = $T1name = $T2name = $T3name = $T4name = $T5name = $T6name = $T7name = $T8name = '';
$errors = array('week', 'T1name', 'T2name', 'T3name',  'T4name', 'T5name', 'T6name' ,  'T7name', 'T8name');

if(isset($_GET['submit'])){



    //Check T1name
    if(empty($_POST['week'])){
        $errors['week']='Enter the game week <br />';
    }else {
        $week = $_POST['week'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $week)){
            $errors['week']= 'Team name must be letters and spaces only';
        }
    }

    if(empty($_POST['T1name'])){
        $errors['T1name']= 'Enter the first team <br />';
    }else {
        $T1name = $_POST['T1name'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $T1name)){
            $errors['T1name']='Team name must be letters and spaces only';
        }
    }

     //Check T2name
     if(empty($_POST['T2name'])){
        $errors['T2name']='Enter the second team <br />';
    }else {
        $T2name = $_POST['T2name'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $T2name)){
            $errors['T2name']= 'Team name must be letters and spaces only';
        }
    }

     //Check T3name
     if(empty($_POST['T3name'])){
        $errors['T3name']= 'Enter the third team <br />';
    }else {
        $T3name = $_POST['T3name'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $T3name)){
            $errors['T3name']= 'Team name must be letters and spaces only';
        }
    }

     //Check T4name
     if(empty($_POST['T4name'])){
        $errors['T4name']= 'Enter the third team <br />';
    }else {
        $T4name = $_POST['T4name'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $T4name)){
            $errors['T4name']= 'Team name must be letters and spaces only';
        }
    }
     //Check T5name
     if(empty($_POST['T5name'])){
        $errors['T5name']= 'Enter the third team <br />';
    }else {
        $T5name = $_POST['T5name'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $T5name)){
            $errors['T5name']= 'Team name must be letters and spaces only';
        }
    }

     //Check T6name
     if(empty($_POST['T6name'])){
        $errors['T6name']= 'Enter the third team <br />';
    }else {
        $T6name = $_POST['T6name'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $T6name)){
            $errors['T6name']= 'Team name must be letters and spaces only';
        }
    }

     //Check T7name
     if(empty($_POST['T7name'])){
        $errors['T7name']= 'Enter the third team <br />';
    }else {
        $T7name = $_POST['T7name'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $T7name)){
            $errors['T7name']= 'Team name must be letters and spaces only';
        }
    }

     //Check T8name
     if(empty($_POST['T8name'])){
        $errors['T8name']= 'Enter the third team <br />';
    }else {
        $T8name = $_POST['T8name'];
        if(!preg_match('/^[a-zA-Z\s]+$/', $T8name)){
            $errors['T8name']= 'Team name must be letters and spaces only';
        }
    }

    if(array_filter($errors)){

    } else{

        $week = mysqli_real_escape_string($conn, $_POST['week']);
        $T1name = mysqli_real_escape_string($conn, $_POST['T1name']);
        $T2name = mysqli_real_escape_string($conn, $_POST['T2name']);
        $T3name = mysqli_real_escape_string($conn, $_POST['T3name']);
        $T4name = mysqli_real_escape_string($conn, $_POST['T4name']);
        $T5name = mysqli_real_escape_string($conn, $_POST['T5name']);
        $T6name = mysqli_real_escape_string($conn, $_POST['T6name']);
        $T7name = mysqli_real_escape_string($conn, $_POST['T7name']);
        $T8name = mysqli_real_escape_string($conn, $_POST['T8name']);

        //create sql
        $sql = "INSERT INTO fixtures(week,T1name,T2name,T3name,T4name,T5name,T6name,T7name,T8name,)) VALUES('$week','$T1name', '$T2name', '$T3name', '$T4name' ,'$T5name', '$T6name' ,'$T7name', '$T8name')";

        if(mysqli_query($conn,$sql)){
            //success
        }else{
            echo 'query error: ' . mysqli_error($conn);
        }
        header('Location: add.php');
    }

}


?>

<!DOCTYPE html>
<html>

    <section class="container ">

   


        <h4>Add teams</h4>
        <form class="white" action="add.php " method="POST" style="max-width: width 400px; margin: 20px auto;padding:20px">

        <?php include "db_config.php";

        if(isset($_POST['submit'])){   
            $week = $_POST['week'];
            $T1name = $_POST['T1name'];
            $T2name = $_POST['T2name'];
            $T3name = $_POST['T3name'];
            $T4name = $_POST['T4name'];
            $T5name = $_POST['T5name'];
            $T6name = $_POST['T6name'];
            $T7name = $_POST['T7name'];
            $T8name = $_POST['T8name'];
                        
        }        

        $data = "INSERT INTO fixtures (`week`, `T1name`, `T2name`, `T3name`, `T4name`, `T5name`, `T6name`, `T7name`, `T8name`)VALUES ('$week', '$T1name', '$T2name', '$T3name', '$T4name', '$T5name', '$T6name', '$T7name', '$T8name')";        

        mysqli_query($conn,$data);

        ?>
            <label>Week</label>
            <input type="text" name="week" value ="<?php echo $week?>">
            <div class="red-text"></div>

            <label>First Team</label>
            <input type="text" name="T1name"  value ="<?php echo $T1name?>">
            <div class="red-text"></div>

            <label>Second Team</label>
            <input type="text" name="T2name"  value ="<?php echo $T2name?>">
            <div class="red-text"></div>

            <label>Third Team</label>
            <input type="text" name="T3name"  value ="<?php echo $T3name?>">
            <div class="red-text"></div>

            <label>Fourth Team</label>
            <input type="text" name="T4name"  value ="<?php echo $T4name?>">
            <div class="red-text"></div>

            <label>Fifth Team</label>
            <input type="text" name="T5name"  value ="<?php echo $T5name?>">
            <div class="red-text"></div>

            <label>Sith Team</label>
            <input type="text" name="T6name"  value ="<?php echo $T6name?>">
            <div class="red-text"></div>

            <label>Seventh Team</label>
            <input type="text" name="T7name"  value ="<?php echo $T7name?>">
            <div class="red-text"></div>

            <label>Eighth Team</label>
            <input type="text" name="T8name"  value ="<?php echo $T8name?>">
            <div class="red-text"></div>

            <div>
                <input type="submit" name="submit" value="submit" class="btn brand z-depth-0">
            </div>
            <a href="mainAdmin.php" class="link-primary">Go to dashBoard</a>

    </section>

</html>