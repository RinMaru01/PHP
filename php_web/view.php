<?php
     $title = 'View Record';

     require_once 'includes/header.php';
     require_once 'includes/auth_check.php';
     require_once 'db/conn.php';

     //get attendee by id
     if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
     }else{
        $id = $_GET['id'];
        $result = $crud->getAttendeeDetails($id);
       
?>   
<img src="<?php echo empty($result['avatar_path']) ? "upload/blank.png" : $result['avatar_path'] ; ?>" class="rounded-circle" style="width: 20%; height: 20% "/>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
            <?php echo $_POST['firstname'] . ' ' . $_POST['lastname']; ?>
        </h5>
        <h6 class="card-subtitle mb-2 text-muted">
            <?php echo $specialtyName['name']; ?>
        </h6>
        <p class="card-text">
            Date Of Birth: <?php echo $_POST['dob']; ?>
        </p>
        <p class="card-text">
            Email Address: <?php echo $_POST['emailaddress']; ?>
        </p>
        <p class="card-text">
            Contact number: <?php echo $_POST['contactnumber']; ?>
        </p>
    </div>
</div>
<br/>
        <a href="viewrecords.php" class="btn btn-info">Back to list</a>
        <a href="edit.php>id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $r['attendee_id'] ?>"class="btn btn-danger">Delete</a>
    <?php } ?>

<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>