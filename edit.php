<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$age = $resultData['age'];
$email = $resultData['email'];
?>
<html>
<head>	
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-success">
      <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">SMA Coding
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            
            <li class="nav-item">
              <a class="nav-link active text-light" aria-current="page" href="index.php">Home</a>
            </li>

          </ul>

          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="add.php">
                  <button class="btn btn-outline-light me-2" type="button">Daftar Baru</button>
              </a>
              
            </li>
            
          </ul>
        </div>
      </div>
    </nav>


	  <section>
        <div class="container mt-5 pt-5 mb-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-10 m-auto">
                    <div class="card border-0 shadow">
                        <div for="validation" class="card-body">

                            <h1 class="text-center">EDIT DATA</h1>
                            
<br>

                            <form for="validation" name="edit" method="post" action="editAction.php">
                                <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                                    <input type="text" name = "name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $name; ?>" required>
                                </div>

                                  <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Age</span>
                                    <input type="number" name = "age" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $age; ?>" required>
                                  </div>

                                  <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                                    <input type="email" name = "email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?php echo $email; ?>" required>
                                  </div>

                                  <div class="text-center">
								  	<input type="hidden" name="id" value=<?php echo $id; ?>>
                                    <button class="btn btn-success" name="update" value="Update">Submit</button>
                                  </div>

                                  <div class="text-center">
                                    <a href="index.php">Home</a>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </section>
	
</body>
</html>