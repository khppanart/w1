<?php
  ob_start();
  session_start();

  if(isset($_POST['login'])){
    if(isset($_POST['email']) and !empty($_POST['password'])){
      include "connect.php";
      $sql = "SELECT * FROM user";
      $result = $conn->query($sql);
      $row = $result->fetch_assoc();
      if($row['email']==$_POST['email'] and $row['password']== $_POST['password']){
          echo "Hi $row[fullname]";
          session_regenerate_id();
          $_SESSION['loggedin'] = TRUE;
          $_SESSION['email'] = $row['email'];
          $_SESSION['password'] = $row['password'];
          header('Refresh: 2; URL = index.php');
      }else{
        //echo "이메일과 비밀번호를 찾을 수 없습니다.";
        echo "ไม่พบ email และ password";
        header('Refresh: 3; URL = login.php');
      }
    }else{
      //echo "다시 로그인";
      echo "Login อีกครั้ง";
      header('Refresh: 2; URL = login.php');
    }

  }else{
?>
      <h2> Login </h2>
      <form action="login.php" method="post">
        E-mail: <input type="email" name="email" /> <br/>
        Password: <input type="password" name="password"/> <br/>
        <input type="submit" value="LOGIN" name="login"/>
      </from>
    <?php 
      }
    ?>
