<?php
include 'app.php';
include 'setcookies.php';
$setcookie = new setCookies();
?>
<div class="container">
<table class="table table-bordered mt-5" style="text-align: center">
        <tr>
          <th>Student Id</th>
          <th>Full Name</th>
          <th>Nationality</th>
          <th>Gender</th>
          <th>Degree of Student</th>
          <th>Faculty</th>
          <th>Admission Year</th>
          <th>Student of Teacher</th>
          <th>Residential Hall</th>
          <th>Action</th>
        </tr>
         
        <?php foreach ($setcookie->students as $key=>$student){?>
          <tr>
            <td><?php echo $key+1 ?></td>
            <td><?php echo $student['fullname'] ?></td>
            <td><?php echo $student['nationality'] ?></td>
            <td><?php echo $student['gender'] ?></td>
            <td><?php echo $student['degree'] ?></td>
            <td><?php echo $student['faculty'] ?></td>
            <td><?php echo $student['admission'] ?></td>
            <td><?php echo $student['t_name'] ?></td>
            <td><?php echo $student['flat'] ?></td>
            <?php echo $setcookie->removeCookie($key);?>
            <td><a class="btn btn-danger" href="?remove=<?php echo $key ?>" name="remove">Remove</button></td>
              <?php } ?>
             

            
          </tr>
         
          
        </table>
        </div>