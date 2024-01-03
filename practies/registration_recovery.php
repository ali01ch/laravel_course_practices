
<div class="container row mx-auto border border-secondary w-auto py-4">
    <?php 
        if(isset($_POST["register"])){
    ?>
    <h1 class="text-info">با موفقیت ثبت شد</h1>
</div>

<?php


    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $national_code = $_POST["national_code"];
    $date_of_birth = $_POST["date_of_birth"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $further_details = $_POST["further_details"];


    $myDb = mysqli_connect("localhost", "root", "") or die("error!!");
    mysqli_select_db($myDb, "practice_1");

    $enter_information = "INSERT INTO `registration_form`(`first_name`, `last_name`, `national_code`, `date_of_birth`, `gender` , `email` , `further_details`) VALUES ('".$first_name."' , '".$last_name."' , '".$national_code."' , '".$date_of_birth."' , '".$gender."' , '".$email."' , '".$further_details."')";
    mysqli_query($myDb, "SET CHARACTER SET UTF8");
    $result = mysqli_query($myDb, $enter_information);

    mysqli_close($myDb);
}

?>