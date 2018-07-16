<html>
<head>
<title>PHP CRUD Login</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body style="background-color: black; margin-top:15%;">
<div class="container">
<div class="jumbotron" style="background-color:black;">
<center>
	<h3 style="color: white;">PHP CRUD Login</h3>
<form action="admin.php" method="POST">
  <div class="form">
    <div class="col-7">
      <input type="password" class="form-control" placeholder="password" required name="pass"/>
    </div><br>
	<div class="col-auto">
      <input class="btn btn-outline-primary" value="submit" type="submit" name="submit"/>
	</div>
	</div>
</form>
</center>
</div>
</div>
</body>
