<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="login.css" />
    <link rel="stylesheet" href="/main.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

    <title> SMS Login Form </title>
  </head>
  <body>
    <div class="loginContainer">
      <div class="d-lg-flex position-relative">
        <div class="d-flex logoContainer">
          <div class="polygon1 position-relative">
            <img class="logo" src="img/logo.png" alt="bcp-logo" />
          </div>
          <div class="polygon2"></div>
        </div>
        <div
          class="form-container d-flex justify-content-center w-100 p-3 p-lg-5"
        >
          <div class="m-auto">
            <div class="form-header1 ps-2 mb-5">
              <h1 class="header1 fw-bold fs-1 m-0">BCP</h1>
              <h1 class="header2 fw-bold fs-1 m-0">SCHOOL MANAGEMENT SYSTEM LOGIN FORM</h1>
            </div>
            <form action="php/check-login.php" method="post" onSubmit="{SubmitHandler}">
                Please Sign in!
              </label>
              
              <div class="mb-2"></div>
      <select class="form-select mb-3"
              name="role" 
              aria-label="Default select example">
        <option selected value="admin"> Administrator </option>
        <option value="admin"> LMS </option>
        <option value="admin"> FACULTY MANAGEMENT INFORMATION SYSTEM </option>
        <option value="admin"> ACADEMIC MANAGEMENT SYSTEM </option>
        <option value="admin"> ENROLLMENT </option>
        <option value="admin"> REGISTRAR </option>
        <option value="admin"> HUMAN RESOURCE </option>
        <option value="admin"> FINANCIALS </option>
        <option value="admin"> PAYMENT MANAGEMENT SYSTEM </option>
        <option value="admin"> PROPERTY CUSTODIAN </option>
        <option value="admin"> STUDENT PORTAL </option>
        <option value="admin"> CRAD  </option>
        <option value="admin"> PREFECT OF DISCIPLINE </option>
        <option value="admin"> SAFETY AND SECURITY </option>
        <option value="admin"> CLINIC </option>
        <option value="admin"> GUIDANCE </option>
        <option value="admin"> EVENT MANAGEMENT SYSTEM </option>
        <option value="admin"> MANAGEMENT INFORMATION SYSTEM </option>
        <option value="admin"> LOGISTIC MANAGEMENT SYSTEM </option>
        <option value="admin"> QUALITY ASSURANCE </option>
      </select>
    
      <div class="mb-3">
        <label for="username" 
               class="form-label" placeholder="enter">User name</label>
        <input type="text" 
               class="form-control" 
               name="username" 
               id="username">
      </div>
      <div class="mb-3">
        <label for="password" 
               class="form-label">Password</label>
        <input type="password" 
               name="password" 
               class="form-control" 
               id="password">
      </div>

      <?php if (isset($_GET['error'])) { ?>
        <div class="alert alert-danger" role="alert">
    <?=$_GET['error']?>
  </div>
  <?php } ?>
<center>
    <button type="submit" class="btn btn-primary"> Log in <i class="bx bx-log-in"></i></button><hr>
    <a href="#">forgot password.</a>
    
          </div>
        </div>
      </div>
    </div>

  </body>
</html>


    <?php }else{
	header("Location: home.php");
} ?>