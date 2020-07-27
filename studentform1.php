<!DOCTYPE html>
<html>
<head>
	<title>Student Form </title>

	
</head>
<body>
<div id="registerForm">
	<h1>Register Form</h1>
	<form method="post" action="addstudent1.php" enctype="multipart/form-data">
		<label>Name</label>
		<input type="text" name="name" ><br>

		<label>Email</label>
		<input type="email" name="email"><br>

		Phone: <input type="text" name="phone">
  		<br><br>
		Gender:
		<input type="radio" name="gender" value="female">Female
		<input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="other">Other
		<br><br>
        Township:
        <select name="township">
            <option>Hpa-An</option>
            <option>Yangon</option>
            <option>Mandalay</option>
        </select>
        <br><br>
        Grade:
        <select name="grade">
            <option>First Year</option>
            <option>Second Year</option>
            <option>Third Year</option>
        </select>
        <br><br>
        Subject:
        <input type="checkbox" name="subject[]" value="Sub1">501
        <input type="checkbox" name="subject[]" value="Sub2">502
        <input type="checkbox" name="subject[]" value="Sub3">503
        <br><br>
        <input type="submit" name="submit" value="Submit">  
	</form>
</div>
	<table border="1" cellspacing="0" cellpadding="10">
		<thead>
			<tr>
				<th>No.</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
				<th>Gender</th>
				<th>Township</th>
				<th>Grade</th>
				<th>Subject</th>


				<th colspan="2">Action</th>
			</tr>
				
				
			
		
		</thead>
		<tbody id="tbody">
	
    </tbody>
	</table>



</body>
</html>



