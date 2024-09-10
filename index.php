<!DOCTYPE html>
<html lang="en">
<head>
	<title>Formulir Kontak</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w" action="proses.php" method="post">
					<span class="login100-form-title">
						Formulir Kontak
					</span>
					<div class="p-t-31 p-b-1">
						<span class="txt1">
							Nama
						</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="nama" >
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-5 p-b-1">
						<span class="txt1">
							NIM
						</span>
					</div>
					<div class="wrap-input100 validate-input" >
						<input class="input100" name="nim" >
						<span class="focus-input100"></span>
					</div>
					<div class="p-t-5 p-b-1">
						<span class="txt1">
							Email
						</span>
					</div>
					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="email" >
						<span class="focus-input100"></span>
					</div>
					<div class="dropdown" >
						<select class="mt-3 p-3" name="kelas" style="border: 1px solid #e6e6e6; background-color: #f7f7f7; border-radius: 10px; width: 460px;">
                            <option>Pilih Kelas</option>
                            <option value="t3a">T3A</option>
							<option value="t3b">T3B</option>
							<option value="t3c">T3C</option>
							<option value="t3d">T3D</option>
							<option value="t3e">T3E</option>	
							<option value="t3f">T3F</option>
						</select>
                    </div>
					<div class="p-t-5 p-b-1">
                        <span class="txt1">
							Saran
						</span>
                        <textarea class="form-control" id="exampleFormControlTextarea1" name="saran" cols="400" rows="2" 
						style="border: 1px solid #e6e6e6; background-color: #f7f7f7; border-radius: 10px; width: 460px;"></textarea>
                    </div>
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Kirim
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>
</html>