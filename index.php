<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		@import url("https://fonts.googleapis.com/css?family=Aclonica")
		*{
	margin: 0;
	padding: 0;
	font-family: Century Gothic;

}
header{
	background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)), url("https://image.freepik.com/free-vector/payment-transfer-mobile-phones_1133-384.jpg");
	height: 100vh;
	background-size:cover;
	background-position: center; 
}
ul{ margin: 0px;
	padding: 4px;
	position: absolute;
	top: 80%;
	left: 40%;
	list-style-type: none;
	opacity: 2.1;

}
ul li{
	float: left;
	width: 180px;
	height: 40px;
	background-color: black;
	opacity: .8;
	line-height: 40px;
	list-style-type: none;
	text-align: center;
	
	font-size: 60px;
}
ul li a{
	color: white;
	font-size: 20px;
	text-decoration: none;
	display: block;

}
ul li a:hover{
	background-color: green;
	display: block;

}
ul li ul li{
	display: none;

}
ul li:hover ul li{
	display: block;

}


.active{
	background-color: green;
	color: white;
}



.main{
	max-width: 1200px;
	margin: auto;
}
.title{
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}
.title h1{
	font-size: 70px;
	font-family: 'Aclonica';
	font-style: italic;
	color:  #2F4F4F;
}
		
</style>
	<title>Credit Management</title>
	<!--<link rel='stylesheet' type='text/css' href='css/style.php'>-->
</head>
<body>
	<header>
		<div class='main'>
			<!--<div class='logo'>
				<img src='https://www.pymnts.com/wp-content/uploads/2015/12/shutterstock_229973926.jpg'>
			</div>-->
			<ul>
				<li class='active'><a href='users.php'>View all users</a>
				
		</div>
		<div class='title'>
			<h1><b>WELCOME TO CREDIT MANAGEMENT SYSTEM </b></h1>
			
		</div>
	</header>

</body>
</html>