<?php
    include 'connect.php';
 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <?php
                                            if (isset($_POST['regis'])) {
                                                // Prepare the query
                                                $nm = ($_POST['name']);
                                                $usernm = ($_POST['username']);
                                                $almt = ($_POST['almt']);
                                                $notlp = ($_POST['no_tlp']);
                                                $pass = md5($_POST['password']);
                                                $gmail = ($_POST['email']);
                                                $query = "INSERT INTO user  VALUES ('','$nm','$usernm','$pass','$gmail', '$almt', '$notlp', 'peminjam')";
                                            
                                                // Execute the query
                                                if (mysqli_query($connect, $query)) {
                                                    echo "<script>
                                                        alert('Akun anda sudah dibuat!');
                                                        location.href='login.php';
                                                    </script>";
                                                } else {
                                                    echo "<script>
                                                        alert('Error!', : " . mysqli_error($connect) . "', 'error');
                                                    </script>";
                                                }
                                            }
                                        
                                        ?>
                                        <form method="POST">
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" name="name" type="text" placeholder="Enter your full name" />
                                                        <label for="inputFirstName">Full name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" name="username" type="text" placeholder="Enter your last name" />
                                                        <label for="inputLastName">Username</label>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="text" name="almt" placeholder="Create a password" />
                                                        <label for="inputPassword">Alamat</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="tel" name="no_tlp" placeholder="Confirm password" />
                                                        <label for="inputPasswordConfirm">No Phone</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="email" name="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Email address</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Create a password" />
                                                <label for="inputPassword">Password</label>
                                            </div>
                                                
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button class="btn btn-primary btn-block" name="regis" href="register.php">Create Account</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <!-- <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div> -->
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
