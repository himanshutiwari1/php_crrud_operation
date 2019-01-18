<?php
require_once('connect.php');
extract($_POST);
if(isset($submit))
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	
	$creatsql = "INSERT INTO crud(firstname, lastname, email, mobile, gender, age) values('$fname', '$lname', '$email', '$mobile', '$gender', '$age')";
	$res = mysql_query($creatsql);
	if($res)
	{
		echo "Sucessfully inserted data";
	}else
	{
		echo "Failed inserted data";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>simple crud application in php & mysql</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
				<h2>Creat operation in crud application</h2><br><br>
				<div class="form-group">
					<label for="input1" class="col-sm-6 controle-label">First name</label>
					<div col-sm-10>
						<input type="text" name="fname" class="form-control" id="input1" placeholder="First Name">
					</div>
				</div>

				<div class="form-group">
					<label for="input1" class="col-sm-6 controle-label">Lirst name</label>
					<div col-sm-10>
						<input type="text" name="lname" class="form-control" id="input1" placeholder="Lirst Name">
					</div>
				</div>

				<div class="form-group">
					<label for="input1" class="col-sm-6 controle-label">E-mail</label>
					<div col-sm-10>
						<input type="text" name="email" class="form-control" id="input1" placeholder="E-mail">
					</div>
				</div>

				<div class="form-group">
					<label for="input1" class="col-sm-6 controle-label">Mobile</label>
					<div col-sm-10>
						<input type="text" name="mobile" class="form-control" id="input1" placeholder="Mobile">
					</div>
				</div>

				<div class="form-group" class="radio">
					<label for="input1" class="col-sm-6 controle-label">Gender</label>
					<div col-sm-10>
						<label>
						<input type="radio" name="gender" id="optionsRadios1" value="mail" checked>Mail
					    </label>
					    <label>
					    <input type="radio" name="gender" id="optionsRadios1" value="femail" checked>Femail
					    </label>
					</div>
				</div>

				<div class="form-group">
					<label for="input1" class="col-sm-6 controle-label">Age</label>
					<div col-sm-10>
						<select name="age" class="form-control">
							<option>--Selecr your age--</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
						</select>
					</div>
				</div>
				<input type="submit" name="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="submit">
			</form>
		</div>
	</div>
</body>
</html>