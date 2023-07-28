<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
  <title>User Registration</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body class="container text-center">
  <h2>User Registration</h2>
  <form action="register.php" method="post">
    <div class="mb-3">
      <label for="username" class="form-label">Username</label>
      <input type="text" class="form-control" id="username" name="username" required>
    </div>
    <br>
    <label for="handle" class="form-label">Handle</label>
    <div class="input-group mb-3">
      <span class="input-group-text" id="@">@</span>
      <input type="text" class="form-control" placeholder="Handle" aria-label="Username" aria-describedby="@" id="handle" name="handle" required>
    </div>
    <br>
    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
    </div>
    <br>
    <label for="password" class="form-label">Password</label>
    <input type="password" id="password" class="form-control" aria-describedby="passwordHelpBlock" name="password" required>
    <div id="passwordHelpBlock" class="form-text">
      Your password must be atleast 16 characters long and contain lower cased letters, upper cased letters, numbers, and special characters.
    </div>
    <br>
    <div class="mb-3">
      <label for="security_question" class="form-label">Security Question</label>
      <input type="text" class="form-control" id="security_question" name="security_question" required>
    </div>
    <br>
    <div class="mb-3">
      <label for="security_answer" class="form-label">Security Answer</label>
      <input type="text" class="form-control" id="security_answer" name="security_answer" required>
    </div>
    <br>
    <input type="submit" value="Register">
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
