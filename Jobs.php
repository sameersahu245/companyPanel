<html>
<head>
<title>Company</title>
<link rel="stylesheet"  href="navstyle.css" href="style3.css">
<style>
body{
	background:#c0c0cc;
}
button [type=submit]{
	padding:5px;
	font-size:18px;
}


</style>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Company Panel</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarColor03">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="Application.php">Applications <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="Profile.php">Profile<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="Jobs.php">Jobs<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="ViewStudents.php">View Students<span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="Feedback.php">Feedback<span class="sr-only">(current)</span></a>
      </li>
    </ul>
	<ul class="nav navbar-nav navbar-right">
		<li><a href="MainWeb.php">Logout</a></li>
	</ul>
  </div>
  </header>
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
  
  function writedata(){
	  firebase.database().ref(
  }
</script>
<input type="text" id="jobpost" class="input-field" placeholder="job post" required>
<input type="text" id="jobsalary" class="input-field" placeholder="salary" required>
<input type="text" id="jobgrade" class="input-field" placeholder="grade" required>
<button onclick="writedata" class="input-field" placeholder="add job" required>
				<center>
						<form  class="input-group" align="center">
						
							<button type="submit" class="submit-btn">Add New Job</button>
						</form>
				</center
	</body>
  </html>