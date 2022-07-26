<?php
include 'app.php';
include 'setcookies.php';
 $setcookie = new setCookies();
 session_start();
?>
<div class="container">
    <h3 style="text-align: center" class="mt-3">Add New Student</h3>

 
 
    
<form action="" method="POST" enctype="multipart/form-data" class="form-horizontal mt-3">
<label class="form-check-label" for="exampleCheck1">Choose Your Degree</label>
<select class="form-control mb-3" name="degree">
            <option value="">Choose</option>
            <option value="Undergraduate">Undergraduate</option>
            <option value="Postgraduate">Postgraduate</option>
        </select>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="fullname" placeholder="Full Name">
          </div>
          <div class="mb-3">
            <label class="form-check-label" for="exampleCheck1">Nationality</label>
            <input type="text" class="form-control" name="nationality" placeholder="Nationality">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Faculty Name</label>
            <input type="text" class="form-control" name="faculty" placeholder="Faculty Name">
          </div>
        <label class="form-check-label" for="exampleCheck1">Choose Your Gender</label>
          <select class="form-control mb-3" name="flat">
            <option value="">Choose</option>
            <option value="Erkak">Erkak</option>
            <option value="Ayol">Ayol</option>
        </select>
        <div class="mb-3">
            <label class="form-check-label" for="exampleCheck1">Admission</label>
        <input type="text" class="form-control" name="admission" placeholder="Admission">
        </div>
        <div class="mb-3">
            <label class="form-check-label" for="exampleCheck1">Supervisor name</label>
        <input type="text" class="form-control" name="supervisor_name" placeholder="Supervisor Name">
        </div>
        <label class="form-check-label" for="exampleCheck1">Choose Your Flat</label>
        <select class="form-control mb-3" name="flat">
            <option value="">Choose</option>
            <option value="residential_hall">Residential Hall</option>
            <option value="research_topic">Research Topic</option>
        </select>
          <button type="submit" class="btn btn-primary mt-3" name="submit" style="float: right">Submit</button>
          <?php echo $setcookie->insertCookie(); ?>
         
        </form>
</div>
