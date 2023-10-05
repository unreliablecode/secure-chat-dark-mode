<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/4733528720.js" crossorigin="anonymous"></script>

  <title>unreliablecode</title>
  <link rel="stylesheet" type="text/css" href="resources/css/index.css">
  <link rel="stylesheet" type="text/css" href="resources/css/queries.css">
  <link rel="stylesheet" type="text/css" href="vendors/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="vendors/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="vendors/css/Grid.css">
  
  <style>
    body {
      background-color: #222; /* Dark background color */
      color: #fff; /* Text color */
      font-family: Arial, sans-serif;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background: rgba(255, 255, 255, 0.2); /* Glass-like background */
      border-radius: 10px;
      padding: 20px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      backdrop-filter: blur(10px); /* Glass-like blur effect */
      text-align: center;
    }

    h1 {
      font-size: 64px;
    }

    input[type="text"],
    input[type="password"] {
      background: rgba(255, 255, 255, 0.1); /* Input field background */
      border: none;
      border-bottom: 2px solid #fff;
      color: #fff;
      margin-bottom: 20px;
      padding: 10px;
      border-radius: 5px;
      width: 100%;
      outline: none;
    }

    .btn-secondary {
      background-color: transparent;
      border-color: #6c757d; /* Button border color */
      color: #6c757d; /* Button text color */
    }

    .btn-secondary:hover {
      background-color: #6c757d;
      color: #fff;
    }

    a {
      color: #007bff;
    }

    a:hover {
      text-decoration: none;
    }

    small {
      color: #aaa;
    }
  </style>
</head>
<body>
  <h1>unreliablecode</h1>
  <br/>
  <h1>Register</h1>

  <div class="container">
    <form action="" method="POST">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Username" required name="username">
      </div>

      <div class="form-group">
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
      </div>

      <button type="submit" class="btn btn-secondary w-100" name="register">Register</button>
    </form>
    <div id="small">
      <small>
        <a href="index.php" class="text-primary">Login?</a>
      </small>
    </div>
  </div>
  
  <?php require_once 'server/server.php'; ?>
</body>
</html>

<script>
  if ( window.history.replaceState ) {
    window.history.replaceState( null, null, window.location.href );
  }
</script>
