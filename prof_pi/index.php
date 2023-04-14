<?php 
if (isset($_POST['submit'])) {
include_once('conexao.php');

  $nome = $_POST['nome'];
  $sobrenome = $_POST['Sobrenome'];
  $ra = $_POST['ra'];
  $turma = $_POST['cod_turma'];
  $email = $_POST['email'];

  $result = mysqli_query($mysqli, "INSERT INTO alunos(RA_ALUNOS, COD_TURMA, NOME_ALUNOS, EMAIL_ALUNO) VALUES ('$ra', '$turma', '$nome', '$email')");
}

?> 

<!DOCTYPE html>
<html lang="pt-BR">
<?php
include("conexao.php");
  ?>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Professor Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                
                <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Painel Professor</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/purple-bootstrap-admin-template/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
       
        
      </nav>
      <center><img src="img/aba1.png" alt="logo" width=25% align="text-center" /></center>
      
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">ínicio</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <span class="menu-title">Criar Atividade</span>
                <i class="menu-arrow"></i>
                <i class="mdi mdi-crosshairs-gps menu-icon"></i>
              </a>
              <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                  
                  <li class="nav-item"> <a class="nav-link" href="atv_pi.php">Nova Atividade</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="turma_pi.php">
                <span class="menu-title">Acessar Turmas</span>
                <i class="mdi mdi-contacts menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Acessar Alunos</span>
                <i class="mdi mdi-format-list-bulleted menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">
                <span class="menu-title">Sair</span>
                <i class="mdi mdi-chart-bar menu-icon"></i>
              </a>
            </li>
            
            
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Painel
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Criar Aluno <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="row">
              
            </div>
            
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Registrar Aluno</h4>
                    <div class="table-responsive">
                      <form action="" method="POST">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example1" class="form-control" name="nome" />
        <label class="form-label" for="form6Example1">Nome</label>
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
        <input type="text" id="form6Example2" class="form-control" name="Sobrenome" />
        <label class="form-label" for="form6Example2">Sobrenome</label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4"> 
    <input type="number" id="form6Example3" class="form-control" name="ra" />
    <label class="form-label" for="form6Example3">RA</label>
  </div>

  <!-- Text input -->
  <div class="form-outline mb-4">
    <input type="number" id="form6Example4" class="form-control" name="cod_turma" />
    <label class="form-label" for="form6Example4">Código da Turma</label>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <input type="email" id="form6Example5" class="form-control" name="email" />
    <label class="form-label" for="form6Example5">Email</label>
  </div>


  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
    <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
    <label class="form-check-label" for="form6Example8"> Matriculado no SIGA ? </label>
  </div>

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Cadastrar</button>
</form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Pesquisar Alunos</h4>

                    <div class="col-12">
                      <table>
                       <thead>
                         <tr>
  <th>RA_ALUNOS</th>
  <th> </th>
  <th> </th>
  <th>COD_TURMA</th>
  <th> </th>
  <th>NOME_ALUNOS</th>
  <th> </th>
  <th>EMAIL_ALUNO</th>
                       </thead> 
                      <tbody>
                     <?php
$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "mydb";


$mysqli = new mysqli($host,$usuario,$senha,$bd);


//iniciando a conexão com o banco de dados 
$cx = mysqli_connect("localhost", "root", "");
 
//selecionando o banco de dados 
$db = mysqli_select_db($cx, "mydb");
 
//criando a query de consulta à tabela criada 
$sql = mysqli_query($cx, "SELECT * FROM alunos") or die( 
  mysqli_error($cx) //caso haja um erro na consulta 
);


//pecorrendo os registros da consulta. 
while($aux = mysqli_fetch_assoc($sql)) { 
echo"
  <tr>
  <td>$aux[RA_ALUNOS]</td>
  <th> </th>
  <th> </th>
  <td>$aux[COD_TURMA]</td>
  <th> </th>
  <td>$aux[NOME_ALUNOS]</td>
  <th> </th>

  <td>$aux[EMAIL_ALUNO]</td>
  <th> </th>
  <td>
    <a class='btn btn-primary btn-sm'> Editar </a>
    <a class='btn btn-primary btn-sm'> Deletar </a>
  </td>
  </tr>
";


}
 
?>
</tbody>
</table>
  </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
