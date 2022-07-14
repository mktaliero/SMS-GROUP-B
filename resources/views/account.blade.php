<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head> 
<body>
<h1 class="alert alert-success text-center text-info">School Management System</h1>
<br><br><br><br><br><br>
<div class="col-sm-4" style="margin-left: 400px;">
<form >
  <div class="row mb-3">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3">
    </div>
  </div>
  <div class="row mb-3">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3">
    </div>
  </div>
 
 <div class="text-center">
 	<button type="submit" class="btn btn-primary">Sign in</button>
 	<a type="submit" class="btn btn-primary" href="{{ route('signup') }}">Sign Up</a>
 </div>
  
</form>
</div>
<br><br><br><br><br><br><br>
<h3 class="alert alert-success text-center text-info">Gopyright Group B</h3>
</body>
</html>