<?php
function showUserlogged(){
echo"
<style> #error{display:none;}</style>
<div class='alert alert-dismissible alert-success'>
<button type='button' class='close' data-dismiss='alert'>&times;</button>
<strong>Well done!</strong> You successfully Enrolled ! 
</div>
<div class='card border-primary mb-3' style='max-width: 20rem;margin:0 auto;'>
<div class='card-header'></div>
<div class='card-body'>
  <h4 class='card-title'>Provide Information to Register for Luck I/O 2018</h4>
  <p class='card-text'>To accomadate yourself with a highend luxury room, Register yourself from below.</p>
  <div class='form-group'>
    <form action='verify.php' method='POST' enctype='multipart/form-data'>
      <input name='csrf-token' value='' class='form-control form-control-sm' placeholder='input the code' id='csrf-token' type='hidden'>
      <label class='col-form-label col-form-label-sm' for='inputSmall'>Name</label>
      <input required name='fname' class='form-control form-control-sm' placeholder='first name' id='inputSmall' type='text'>
      <label class='col-form-label col-form-label-sm' for='inputSmall'>Last Name</label>
      <input required name='lname' class='form-control form-control-sm' placeholder='last name' id='inputSmall' type='text'>
      <label class='col-form-label col-form-label-sm' for='inputSmall'>Enrollment code</label>
      <input required name='encode' class='form-control form-control-sm' placeholder='input the code' id='inputSmall' type='text'>
      <fieldset class='form-group'>
      <label class='col-form-label col-form-label-sm' for='inputSmall'>Gender</label>
      <div required name='gender' class='form-check'>
          <label class='form-check-label'>
          <input class='form-check-input' name='optionsRadios' id='optionsRadios1' value='option1' checked='' type='radio'>
          Male
          </label>
          <label class='form-check-label'>
          <input class='form-check-input' name='optionsRadios' id='optionsRadios2' value='option2' type='radio'>
          Female
          </label>
      </div>
      </fieldset>
      <button name ='register' class='btn btn-success btn-sm' type='submit'>Register</button>
      <button type='reset' class='btn btn-danger btn-sm'>Reset </button>
    </form>
    <span id='error' class='badge badge-danger' >Please Input the Correct email and Password.</span>
  </div>
</div>
</div>";
}

function showProfileButton(){
    echo"<a class='nav-link' href='user.php'><button name='prof' type='button' class='btn btn-success'>Profile</button> </a>&nbsp";
}
function showLogout(){
    echo"<a class='nav-link' href='logout.php'><button name='logout' class='btn btn btn-warning my-2 my-sm-0' type='submit'>Logout</button></a>";
}

function showHomeGeneral(){

}

function showForm(){
    echo"<form action='index.php' method='POST' class='form-inline my-2 my-lg-0'>
    <label style='color:#00cccc' class='col-form-label col-form-label-sm' for='inputSmall' >Username: &nbsp</label>
    <input name='username' class='form-control form-control-sm' placeholder='email goes here' required id='inputSmall' type='text'>&nbsp 
    <label style='color:#00cccc' class='col-form-label col-form-label-sm' for='inputSmall'>Password: &nbsp</label>
    <input required name='password' class='form-control form-control-sm' placeholder='password goes here' id='inputSmall' type='password'>&nbsp 
    <button name ='login' class='btn btn-success btn-sm' type='submit'>Login</button>
  </form>";
}

function showInformation(){
    echo"<span id='notice' class='badge badge-pill badge-danger' style='float:right;'>Please Check the Credentials and Try Again!</span>
    <div class='card text-white bg-primary mb-3' style='max-width: 17rem;'>
      <div class='card-header'></div>
      <div class='card-body'>
        <h4 class='card-title'>Login Details</h4>
        <p class='card-text'>Use the following details for login</p>
        <div class='list-group'>
         <p style='color:#00cccc' class='list-group-item list-group-item-action active'>Username: admin@sliit.lk</p>
         <p class='list-group-item list-group-item-action'>Password: sliit@123456</p>
        </div>
      </div>
    </div>";
}

function showSSStask(){
    echo"<div class='list-group' style='max-width:20rem;float:left;'>
    <a href='#' class='list-group-item list-group-item-action flex-column align-items-start active'>
      <div class='d-flex w-100 justify-content-between'>
        <h5 class='mb-1'></h5>
        <small>Secure Software System</small>
      </div>
      <p class='mb-1'>This is the  Double Submit Cookie, Method- Protection Method of Cross Site Request Forgery</p>
      <small>CSRF Protection- Double Submit Cookie.</small>
    </a>
    <a href='#' class='list-group-item list-group-item-action flex-column align-items-start'>
      <div class='d-flex w-100 justify-content-between'>
        <h5 class='mb-1'>Lakma Madumadhavi IT15064714</h5>
        <small class='text-muted'></small>
      </div>
      <p class='mb-1'></p>
      <small class='text-muted'>    </small>
    </a>
  </div>";
}

function showVerify($fname,$lname){
$seatcode =makeSeatCode();
echo"<div class='alert alert-dismissible alert-info'>
<button type='button' class='close' data-dismiss='alert'>&times;</button>
<strong>Heads up!</strong> This <a href='#' class='alert-link'>Verification</a>, needs your attention, Please confirm!.
</div> ";
echo"<div class='alert alert-dismissible alert-success' style='max-width:20rem;margin:0 auto;'>
<button type='button' class='close' data-dismiss='alert'>&times;</button>
<strong>CSRF Found and Verified!</strong>.
</div>";
echo"<div class='list-group' style='max-width: 40rem;margin:0 auto;'>
<span class='list-group-item list-group-item-action flex-column align-items-start active'>
  <div class='d-flex w-100 justify-content-between'>
    <h5 class='mb-1'>Confirmation of Registration</h5>
    <small>Now</small>
  </div>
  <p class='mb-1'>Please be kind enough to confirm the provided information are true, from the Link Below and take your Seat No</p>
  <small></small>
</span>";
echo"  <span class='list-group-item list-group-item-action flex-column align-items-start'>
  <div class='d-flex w-100 justify-content-between'>
    <h5 class='mb-1'>Information: </h5>
    <small class='text-muted'>5 Seconds Ago</small>
  </div>";
echo"    <p class='mb-1'>Hi Im, &nbsp" .$fname. "  &nbsp " .$lname. "&nbsp and I am willing to participate for Luck I/O 2018</p>";
echo"    <form action='logout.php' method='POST' enctype='multipart/form-data'>
            <button name ='done' class='btn btn-success btn-sm' type='submit'>Confirm</button> </br>
        </form>";
echo"    <small id='thank' class='text-muted'>Thank You for the Confirmation --> Your Login Code is: </small><span class='badge badge-warning'>".$seatcode."</span>";
echo"  </span>
</div>";
}

function makeSeatCode(){
    $seatcode =strtoupper(bin2hex(random_bytes(4)));
    return $seatcode;
}

function showProfile(){
    echo" <div class='alert alert-dismissible alert-danger'>
    <button type='button' class='close' data-dismiss='alert'>&times;</button>
    <strong>Oh snap, Authentication Error!</strong> <a href='user.php' class='alert-link'>Come through the Profile</a> and try submitting again.
  </div>";
}

function checkallElements($name,$lname,$encode){
    if((isnull($name)==0)&&(isnull($lname)==0)&&(isnull($encode)==0))
    {
        echo"document.getElementById('error').style.display = 'block';";
    }
}
?>