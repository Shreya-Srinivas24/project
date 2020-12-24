<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style3.css">
  <style>
    body{
      background-image: url(loginbg.jpeg);
      /*background-repeat: no-repeat;*/
      background-size: cover;
    }
    form{
      width: 40%;
      height:60%; 
    }
    .header{
      width: 40%;
      background-color: #90979F;

    }
    .btn{
      background-color: #90979F;
    }
  </style>
</head>
<body>
  <div class="header">
  	<h2>Register</h2>
  </div>
	<!-- form to create new account -->
  <form method="post" action="register2.php">
  	<?php include('errors2.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
    <div class="input-group">
      <label>Mobile Number</label>
      <input type="text" name="mobile" id="number" placeholder="+91**********" value="<?php echo $mobile; ?>">
    </div>
    <div id="recaptcha-container"></div>
    <button type="button" onclick="phoneAuth();">SendCode</button>
     <div class="input-group">
      <label>Enter Verification code</label>
      <input type="text" name="Mobile Number" id="verificationCode" placeholder="code" >
       <button type="button" onclick="codeverify();">Verify code</button>

    </div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login2.php">Sign in</a>
  	</p>
  </form>
  __________________________________________________________________________________________
   <!-- The core Firebase JS SDK is always required and must be listed first -->
      <script src="https://www.gstatic.com/firebasejs/5.7.0/firebase-app.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-firestore.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.7.0/firebase-storage.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-auth.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-database.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-messaging.js"></script>
      <script src="https://www.gstatic.com/firebasejs/5.9.0/firebase-functions.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
 <script src="https://www.gstatic.com/firebasejs/7.6.0/firebase-auth.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  var firebaseConfig = {
    apiKey: "AIzaSyBl8vPzegiTVxYurTT3p7G0okblR4D0Hsw",
    authDomain: "first-b1652.firebaseapp.com",
    projectId: "first-b1652",
    storageBucket: "first-b1652.appspot.com",
    messagingSenderId: "1024722533357",
    appId: "1:1024722533357:web:4a7fe7b6ec6de1822985e4",
    measurementId: "G-MV4XC82CDX"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>
<script src="NumberAuthentication.js" type="text/javascript"></script>
</body>
</html>