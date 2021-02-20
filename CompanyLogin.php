<html>
<head>
		<title>Login and Registration Form</title>
		<link rel="stylesheet" href="style.css">
</head>
<body>

<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.9/firebase-analytics.js"></script>
<script>
 
  var firebaseConfig = {
    apiKey: "AIzaSyANmQTOHZ9PPyPsmx6gJBbIeBO0PnQXMM8",
    authDomain: "campusrecruitment---student.firebaseapp.com",
    projectId: "campusrecruitment---student",
    storageBucket: "campusrecruitment---student.appspot.com",
    messagingSenderId: "168786505743",
    appId: "1:168786505743:web:e2182d682c13bbdd4ab37a",
    measurementId: "G-KZXRWJX983"
  };
  
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
</script>

		<div class="hero">
            <div class="form-box">
                <div class="button-box">
                        <div id="btn"></div>
                        <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                        <button type="button" class="toggle-btn" onclick="register()">Register</button>
                </div>
                <div class="social-icons">
                    <img src="fb.png">
                    <img src="tw.png">
                    <img src="gp.png">
                </div>
                <form id="login" class="input-group">
                    <input type="email" id="comp_email" class="input-field" placeholder="Email ID" required>
                    <input type="password" id="comp_password" class="input-field" placeholder="Enter Password" required>
                    <button type="submit" onclick="loginuser()" class="submit-btn">Login</button>
                </form>
                <form id="register" class="input-group">
                    <input type="value" id="comp_id" class="input-field" placeholder="Company ID" required>
                    <input type="email" id="comp_emaill" class="input-field" placeholder="Email ID" required>
					<input type="text" id="comp_address" class="input-field" placeholder="Company Address" required>
                    <input type="password" id="comp_passwordd" class="input-field" placeholder="Enter Password" required>
                    <button type="button" onclick="createuser()" class="submit-btn">Register</button>
                </form>
		      </div>
        </div>
		
    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");
        
        function register(){
            x.style.left="-400px";
            y.style.left="50px";
            z.style.left="110px";
        }
        
         function login(){
            x.style.left="50px";
            y.style.left="450px";
            z.style.left="0px";
        }
    
    </script>
	
</body>
</html>