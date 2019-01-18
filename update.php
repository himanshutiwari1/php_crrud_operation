<?php
require_once('connect.php');
$id = $_GET['id'];
$selectsql ="select * from crud WHERE id=$id";
$res = mysql_query($selectsql);
$r = mysql_fetch_assoc($res);
extract($_POST);
if(isset($submit)) 
{
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$gender = $_POST['gender'];
	$age = $_POST['age'];
	mysql_select_db("demo");
	$updatesql = "UPDATE crud SET firstname='$fname', lastname='$lname', email='$email', mobile='$mobile', gender='$gender', age='$age' WHERE id=$id";
	$res = mysql_query($updatesql);
	if($res)
	{
		header('location:display.php');
	}else
	{
		echo "Failed inserted data";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>simple crud application in php & update</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<form method="post" class="form-horizontal col-md-6 col-md-offset-3">
				<h2>Update operation in crud application</h2><br><br>
				<div class="form-group">
					<label for="input1" class="col-sm-6 controle-label">First name</label>
					<div col-sm-10>
						<input type="text" name="fname" class="form-control" id="input1" value="<?php echo $r['firstname'] ?>" placeholder="First Name">
					</div>
				</div>

				<div class="form-group">
					<label for="input1" class="col-sm-6 controle-label">Lirst name</label>
					<div col-sm-10>
						<input type="text" name="lname" class="form-control" id="input1"  value="<?php echo $r['lastname'] ?>"placeholder="Lirst Name">
					</div>
				</div>

				<div class="form-group">
					<label for="input1" class="col-sm-6 controle-label">E-mail</label>
					<div col-sm-10>
						<input type="text" name="email" class="form-control" id="input1" value="<?php echo $r['email'] ?>" placeholder="E-mail">
					</div>
				</div>

				<div class="form-group">
					<label for="input1" class="col-sm-6 controle-label">Mobile</label>
					<div col-sm-10>
						<input type="text" name="mobile" class="form-control" id="input1"  value="<?php echo $r['mobile'] ?>"placeholder="Mobile">
					</div>
				</div>

				<div class="form-group" class="radio">
					<label for="input1" class="col-sm-6 controle-label">Gender</label>
					<div col-sm-10>
						<label>
						<input type="radio" name="gender" id="optionsRadios1" value="mail" <?php if($r['gender']== 'male'){echo "checked";} ?>>Mail
					    </label>
					    <label>
					    <input type="radio" name="gender" id="optionsRadios1" value="femail" <?php if($r['gender']== 'female'){echo "checked";} ?>>Femail
					    </label>
					</div>
				</div>

				<div class="form-group">
					<label for="input1" class="col-sm-6 controle-label">Age</label>
					<div col-sm-10>
						<select name="age" class="form-control">
							<option>--Selecr your age--</option>
							<option value="18" <?php if($r['age']== '18'){echo "selected";} ?>>18</option>
							<option value="19" <?php if($r['age']== '19'){echo "selected";} ?>>19</option>
							<option value="20" <?php if($r['age']== '20'){echo "selected";} ?>>20</option>
							<option value="21" <?php if($r['age']== '21'){echo "selected";} ?>>21</option>
							<option value="22" <?php if($r['age']== '22'){echo "selected";} ?>>22</option>
							<option value="23" <?php if($r['age']== '23'){echo "selected";} ?>>23</option>
							<option value="24" <?php if($r['age']== '24'){echo "selected";} ?>>24</option>
							<option value="25" <?php if($r['age']== '25'){echo "selected";} ?>>25</option>
							<option value="26" <?php if($r['age']== '26'){echo "selected";} ?>>26</option>
							<option value="27" <?php if($r['age']== '27'){echo "selected";} ?>>27</option>
							<option value="28" <?php if($r['age']== '28'){echo "selected";} ?>>28</option>
							<option value="29" <?php if($r['age']== '29'){echo "selected";} ?>>29</option>
							<option value="30" <?php if($r['age']== '30'){echo "selected";} ?>>30</option>
						</select>
					</div>
				</div>
				<input type="submit" name="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="update">
			</form>
		</div>
	</div>
</body>
</html>