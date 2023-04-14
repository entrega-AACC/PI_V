<?php
// Inicia a sessão
session_start();
?>
<!doctype html>
<html>
	<head>
		<meta charset="UTF-8">
		<!-- CSS only -->
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
			<!-- JavaScript Bundle with Popper -->
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
					<title>Login</title>
			<link rel="stylesheet" type="text/css" href="estilos.css" />
	</head>
	<body background="#0c0e32">
		
	<section class="h-100 gradient-form" style="background-color: #0c0e32;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="img/fatec.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">Acesse o Portal</h4>
                </div>

                <form>

                  <div class="form-outline mb-4">
                    <input type="email" name="usuario" id="form2Example11" class="form-control"
                      placeholder="Insira Código de Acesso" />
                    <label class="form-label" for="form2Example11">Login Aluno-Professor</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="senha" id="form2Example22" class="form-control" />
                    <label class="form-label" for="form2Example22">Senha</label>
                  </div>

                 

                  <div class="text-center pt-1 mb-5 pb-1"> <a href="index.php">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"  value="Entrar" type="button">
    Entrar</button> </a>
                    
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-center">
                <img src="img/aba.png"
                    style="width: 100%;"  alt="logo">
              </div>
            </d10v>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	</body>
</html>