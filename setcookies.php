<?php
session_start();
include 'app.php';

class setCookies {
  
  public $students;
  
  public function __construct()
  {
    $this->createcookie();
    $this->students = [];
  }

  public function createcookie()
  {
   $this->students = isset($_COOKIE['students']) ? unserialize($_COOKIE['students']) : [];
    
  }
  
  public function insertCookie()
  {
    if(isset($_POST['submit']))
    {
      
      $info['fullname'] = $_POST['fullname'];
      $info['nationality'] = $_POST['nationality'];
      $info['gender'] = $_POST['gender'];
      $info['degree'] = $_POST['degree'];
      $info['faculty'] = $_POST['faculty'];
      $info['admission'] = $_POST['admission'];
      $info['supervisor_name'] = $_POST['supervisor_name'];
      $info['flat'] = $_POST['flat'];
      
      array_push($this->students, $info);
      setcookie('students', serialize($students), time() + (86400 * 30));
    }
  }
public function removeCookie()
{

  if (isset($_GET['remove'])) {
    unset($students[$_GET['remove']]);
    setcookie('students', serialize($students), time() + (86400 * 30));
    header('Location: index.php');
  }
}
}
