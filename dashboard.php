<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_dashboard.css">
    <link rel="stylesheet" href="../iconos/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container-fluid">
        <!--Barra de navegacion-->
        <div class="row">
            <div class="col">
                <nav class="navbar navbar-expand-lg">

                    <img class="navbar-brand" src="img/logo.png" alt="">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="dashboard.php"><i
                                        class="fa-solid fa-house fa-xl"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../error4044.html"><i class="fa-solid fa-bell fa-xl"></i></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../ingreso.php"><i class="fa-solid fa-door-open fa-xl"></i></a>
                            </li>

                        </ul>
                    </div>

                </nav>
            </div>
        </div>

        <!--Menu de funcionalidades-->
        <div class="row">
            <div class="col-md-3 menu">
                <!--img del perfil-->
                <div class="row perfiles">
                    <img src="img/user1.png" class="xd" alt="iconempleado">
                    <?php
    session_start(); 
    ?>
                    <h4>Hola <?php echo $_SESSION['user']; ?></h4>
                    <p><?php echo $_SESSION['tipo']; ?></p>
                    <button class="btn btn-outline-light col-4" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Ver perfil</button>
                </div>
                <!-- Modal -->
                <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <img src="img/user1.png" alt="user">
                                <h1 class="modal-title col align-items-center " id="exampleModalLabel"><?php echo $_SESSION['user']; ?></h1>
                                <h4>Rol: <?php echo $_SESSION['tipo']; ?></h4>
                            </div>
                            <div class="modal-body">
                                <p>Correo: <?php echo $_SESSION['email']; ?></p>
                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-secondary"><a href="editar_perfil.php" class="nav-link">Modificar perfil</a></button>
                            </div>
                        </div>
                    </div>
                </div>

                <!--menu de funcionalidades-->
                <h3>Inventario</h3>
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="borrar_producto.php"><i
                                class="fa-solid fa-eye"></i>Ver productos </a></li>
                    <li class="nav-item"><a class="nav-link" href="form_products.php"><i
                                class="fa-solid fa-plus"></i>Agregar productos</a></li>
                </ul>

             
            </div>
            <!--Campo de datos-->
            <div class="col-md-9 martop">
                <div class="row pro">
                  
                    <div class="col-md-3 mediatop white">
                        <div class="card">
                        
                            <div class="card-body ">
                                <img src="img/ganancias.png" alt="ganancias">
                                <h5 class="card-title">Ganancias</h5>
                                <p>1.000.000</p>
                            </div>
                    
                        </div>
                    </div>
                    <div class="col-md-3 mediatop white">
                        <div class="card">
                            <div class="card-body">
                               <img src="img/agregado.png" alt="p_agree">
                                <h5 class="card-title">Productos adjuntos</h5>
                                <p>44</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mediatop white">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/vendido.png" alt="vendido_p">
                                <h5 class="card-title">Productos vendidos</h5>
                                <p>102</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mediatop white">
                        <a class="nav-link" href="poco_producto.php">
                        <div class="card">
                            <div class="card-body">
                                <img src="img/poco_p.png" alt="poco_p">
                                <h5 class="card-title">Pocos productos</h5>
                                <p>51</p>
                            </div>
                        </div></a>
                    </div>
                    <div class="col-md-6 tableposi">
                        <h2>Productos mas vendidos</h2>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Producto</th>
                                    <th scope="col">Porcentaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Camisa de akira toriyama</td>
                                    <td>
                                        <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-danger" style="width: 100%">100%</div>
                                          </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Kimono</td>
                                    <td>
                                        <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-warning text-dark" style="width: 75%">75%</div>
                                          </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Buzo de cubo de rubik</td>
                                    <td>
                                        <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-info text-dark" style="width: 50%">50%</div>
                                          </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Chanclas de badbuny</td>
                                    <td>
                                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-success" style="width: 25%">25%</div>
                                          </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Ropa de kunno</td>
                                    <td>
                                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 0%">0%</div>
                                          </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-6 canva ">
                        <h2>Ventas por mes</h2>
                        <canvas id="myChart"></canvas>
                      </div>
                    <div class="col-md-12 tableposi ">
                        <h2>Marcas mas famosas</h2>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Marca</th>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Porcentaje</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>ADIDAS</td>
                                    <td>
                                        <img src="img/adidas.png" alt="adidas">
                                    </td>
                                    <td>
                                        <div class="progress" role="progressbar" aria-label="Danger example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-danger" style="width: 100%">100%</div>
                                          </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Gucci</td>
                                    <td>
                                        <img src="img/gucci.png" alt="gucci">
                                    </td>
                                    <td>
                                        <div class="progress" role="progressbar" aria-label="Warning example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-warning text-dark" style="width: 75%">75%</div>
                                          </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Zara</td>
                                    <td>
                                        <img src="img/zara.png" alt="zara">
                                    </td>
                                    <td>
                                        <div class="progress" role="progressbar" aria-label="Info example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-info text-dark" style="width: 50%">50%</div>
                                          </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>Nike</td>
                                    <td>
                                        <img src="img/nike.png" alt="nike">
                                    </td>
                                    <td>
                                        <div class="progress" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar bg-success" style="width: 25%">25%</div>
                                          </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>Chanel</td>
                                    <td>
                                        <img src="img/chanel.png" alt="chanel">
                                    </td>
                                    <td>
                                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar" style="width: 0%">0%</div>
                                          </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
               <!-- pie de pagina -->
    <footer> 
        <img id="logofooter" src="img/logo.png" alt="">
        <div class="contengotodo">
            <div class="img">
                <img src="img/contacto.png" alt="contactoicon">
                <h2>Escribenos</h2>
               </div>
               <div class="texto">
                <p>
                    bustamanteparrabryanalexander@gmail.com
                </p>
                <p>
                    luisandrestovarr2019@gmail.com
                </p>
                <p>
                    hoonluv4@gmail.com
                </p>
                <p>
                    sebastiangalindo@gmail.com
                </p>
               </div>         
        </div>
   <div class="contengotodo">
    <div class="img">
        <img src="img/llamada.png" alt="">
        <h2>LLamanos</h2>
    </div>
    <div class="texto">
        <p>3015823912</p>
        <p>313 4177450</p>
        <p>315 2594007</p>
        <p>317 5158394</p>
    </div>
   </div>
       
    </footer>
            </div>
           
                
            
       
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart');
      
        new Chart(ctx, {
          type: 'line',
          data: {
            labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
            datasets: [{
              label: 'Meses',
              data: [12, 19, 3, 5, 2, 3],
              borderWidth: 3
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      </script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    
</body>

</html>
