<?php
  $title = 'Index';
  require_once 'includes/header.php';
?>

<!--
    -first name
    -last name
    -date of birth(use datepicker)
    -specialty
    -email address
    -contact number
-->

<h1 class="text-center">Registration for IT Conference</h1>

<form>
    <div class="form-group">
        <label for="exampleInputEmail">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword">
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


<?php require_once 'includes/footer.php' ?>