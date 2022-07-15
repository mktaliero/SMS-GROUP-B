<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head> 
<body>
<h1 class="alert alert-success text-center text-info">School Management System</h1>
<br><br>
<div class="col-sm-4" style="margin-left: 400px;">
<h4>Create Account</h4>
<!-- <form action="{{createAccount}}" method="post"> -->
  <form action=" " method="post">
 <!--  @csrf -->
<div class="mb-3">
  <label for="formFile" class="form-label">Fullname</label>
  <input class="form-control" type="text" id="full_name">
</div>
<div class="mb-3">
  <label for="formFileMultiple" class="form-label">Email</label>
  <input class="form-control" type="text" id="email">
</div>
<div class="mb-3">
  <label for="formFileDisabled" class="form-label">Phone Number</label>
  <input class="form-control" type="text" id="phone_no">
</div>
<div class="mb-3">
  <label for="formFileSm" class="form-label">Password</label>
  <input class="form-control " id="password" type="text">
</div>
 <div class="text-center">
  <button type="submit" class="btn btn-primary">Submit</button>
  <a type="submit" class="btn btn-danger" href="#">Reset</a>
 </div>
</form>


</div>
<br><br>
<h3 class="alert alert-success text-center text-info">Gopyright Group B</h3>
</body>
</html>