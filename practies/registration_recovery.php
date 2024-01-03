
<div class="container bg-light row mx-auto w-auto py-4">
    <?php 
        if(isset($_POST["register"])){
    ?>
    <div class="w-100 d-flex flex-column justify-content-center align-items-center">
        <div class="w-100my-4  d-flex justify-content-center align-items-center">
            <i class="mx-1 my-0 p-0 text-success fs-1 bi bi-check-circle-fill"></i>   
            <h2 class="mx-1 my-0 p-0 text-success">ثبت نام با موفقیت انجام شد</h2>
        </div>
        <button class="my-4 d-block btn btn-primary"><a class="link-primary text-white" href="index.php?practice_1=true">بازگشت</a></button>
    </div>

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