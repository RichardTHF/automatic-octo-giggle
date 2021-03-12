<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $message = $_POST['message'];

  $link = mysqli_connect('localhost','root','');
  if(!$link){
      exit("data bases connect failed");
  }
  mysqli_set_charset($link,'utf8');
  mysqli_select_db($link,'S16156371');

  $sql = "insert into contact VALUES(NULL,'$name','$email','$number','$message')";
  // echo $sql;
  $bool = mysqli_query($link,$sql);
      if($bool && mysqli_affected_rows($link)){
  echo "<script> alert('发送成功');parent.location.href='index.php'; </script>";
      }else{
  echo "<script> alert('发送失败');parent.location.href='index.php'; </script>";
      }
  mysqli_close($link);