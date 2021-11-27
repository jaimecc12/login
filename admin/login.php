<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.0.2 -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

  <nav class="navbar navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="https://cdn-icons-png.flaticon.com/512/2277/2277588.png" alt="" width="70" height="70">
      </a>

      <ul class="nav justify-content-end">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">inicio</a>
        </li>


      </ul>
    </div>
  </nav>

  <br>
  <br>

  <section class="container">
    <form action="mecanismo.php" method="POST"> 
      <div class="row mb-3">
        <label    class="col-sm-2 col-form-label">correo</label>
        <div class="col-sm-10">
          <input type="text" name="correo"  class="form-control" id="correo">
        </div>
      </div>
      <div class="row mb-3">
        <label   class="col-sm-2 col-form-label">contraseña</label>
        <div class="col-sm-10">
          <input type="password"  name="password" class="form-control" id="password">
        </div>
      </div>
      
      
      <button type="submit" class="btn btn-primary">entrar</button>
    </form>
  </section>

  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>