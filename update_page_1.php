<?php include ('header.php'); ?>
<?php include ('dbcon.php'); ?>




<?php

if(isset($_GET['id']))
{
    $id = $_GET['id'];



$query = "SELECT * FROM `students` where `id` ='$id'";
$result = mysqli_query($connection, $query);

if (!$result) 
{
    die("Query failed: " . mysqli_error($connection));
}
 else
 {
   $row = mysqli_fetch_assoc($result);
   

  }
}
?>

<?php

if(isset($_POST['update_students']))
{

    if(isset($_GET['id_new']))
    {
        $id_new = $_GET['id_new'];
    }

    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $age = $_POST['age'];


    $query = "UPDATE `students` SET `first_name` = '$f_name', `last_name` = '$l_name', `age` = '$age' WHERE `id` = $id_new";

    $result = mysqli_query($connection, $query);

if (!$result) 
{
    die("Query failed: " . mysqli_error($connection));
}

else
{
    header('location:index.php?insert_msg=Your data has been sucessfully updated !');

}


}


?>



<form action="update_page_1.php?id_new=<?php echo $id; ?>" method="post">

    <div class="form-group">
        <label for="f_name">First Name </label>
        <input type="text" name="f_name" class="form-control" value="<?php echo $row['first_name'] ?>">
    </div>

    <div class="form-group">
        <label for="l_name">Last Name </label>
        <input type="text" name="l_name" class="form-control" value="<?php echo $row['last_name'] ?>">
    </div>

    <div class="form-group">
        <label for="age">Age </label>
        <input type="text" name="age" class="form-control" value="<?php echo $row['age'] ?>">
    </div>

    <div style="margin-top: 10px;"> <!-- Adjust margin-top as needed -->
        <input type="submit" class="btn btn-success" name="update_students" value="UPDATE">
    </div>

</form>





<?php include 'footer.php'; ?>