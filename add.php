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

          
        </div>
      </div>
    </nav>

      <section>
        <div class="container mt-5 pt-5 mb-5">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-10 m-auto">
                    <div class="card border-0 shadow">
                        <div for="validation" class="card-body">

                            <h1 class="text-center">Welcome</h1>
                            <h2 class="text-center">Register Yourself</h2>
                            
<br>

                            <form for="validation" action="addAction.php" method="post" name="add">
                                <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
                                    <input type="text" name = "name" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Input Your Full Name" required>
                                </div>

                                  <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Age</span>
                                    <input type="number" name = "age" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Input Your Age" required>
                                  </div>

                                  <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                                    <input type="email" name = "email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Input Your Age" required>
                                  </div>

                                  <div class="text-center">
                                    <button class="btn btn-success" name="submit" value="add">Submit</button>
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