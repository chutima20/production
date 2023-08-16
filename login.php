<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ล็อคอิน</title>

  </style>
</head>
<body class="hold-transition login-page">
<body style="background-color: #99FF99	"></body>
            <br>
            <h2> เข้าสู่ระบบก่อนนะ </h2>
            <hr width="1500">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>

  <center>
    <center>
    <div class="divl">
      <form name="myform" method="post">

        <input type="text" name="user" class="inputtext"
          autocomplete="off" placeholder="username">
        <br>
        <input type="password" name="pass" class="inputtext"
          autocomplete="off" placeholder="password">
        <br>
        <div id="msg"></div>
        <br>
        <input type="button" class="button" name="log" id="logbutton"
          value="Login" s onclick="myfunction()">
        <br><br>
      </form>
    </div>
  </center>
  <script type="text/javascript">
    function myfunction () {
      var user = document.forms["myform"]["user"].value;
      var pass = document.forms["myform"]["pass"].value;
      if (user == "yo" && pass == "1234") {
        window.open('cool.php', '_blank');
      } else {
        document.getElementById("msg").innerHTML = "ไม่ถูกต้อง";
      }
    }
  </script>
  </center>
</body>
</html>