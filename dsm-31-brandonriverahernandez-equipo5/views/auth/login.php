<!DOCTYPE html>
    <html lang="en">
        <head>

            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <meta name="description" content="">
            <meta name="author" content="">

            <title>Previsualizador - Dashboard</title>

            <!-- Custom styles for this template -->
            <link href="http://localhost/BRANDONRIVERA-DSM31/dsm-31-brandonriverahernandez-equipo5/resource/css/sb-admin-2.min.css" rel="stylesheet">

            <!-- Custom styles for this page -->
            <link rel="stylesheet" href="http://localhost/BRANDONRIVERA-DSM31/dsm-31-brandonriverahernandez-equipo5/resource/css/loginstyle.css">

            <!-- Custom fonts for this template-->
            <link href="http://localhost/BRANDONRIVERA-DSM31/dsm-31-brandonriverahernandez-equipo5/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
            <link
                href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
                rel="stylesheet">

            <script src="https://kit.fontawesome.com/07bf2ec53c.js" crossorigin="anonymous"></script>
        </head>

        <section class="vh-100">
            <div class="container-fluid">
                <div class="row">
                <div class="col-sm-6 text-black">

                    <div class="px-5 ms-xl-4">
                    <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
                    <span class="h1 fw-bold mb-0">Previewer</span>
                    </div>

                    <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

                    <form style="width: 23rem;">

                        <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">LOGIN</h3>

                        <div class="form-outline mb-4">
                        <input type="email" id="form2Example18" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example18">Correo electronico</label>
                        </div>

                        <div class="form-outline mb-4">
                        <input type="password" id="form2Example28" class="form-control form-control-lg" />
                        <label class="form-label" for="form2Example28">Contraseña</label>
                        </div>

                        <div class="pt-1 mb-4">
                        <button class="btn btn-info btn-lg btn-block" type="button">Acceder</button>
                        </div>

                        <!-- <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">Forgot password?</a></p> -->
                        <p>¿No tienes una cuenta? <a href="http://localhost/BRANDONRIVERA-DSM31/dsm-31-brandonriverahernandez-equipo5/views/users/add.php" class="link-info">Crear una nueva cuenta</a></p>

                    </form>

                    </div>

                </div>
                <div class="col-sm-6 px-0 d-none d-sm-block">
                    <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg"
                    alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
                </div>
                </div>
            </div>
        </section>
      
<?php
    include __DIR__ . '/../../layout/footer.php';
?>