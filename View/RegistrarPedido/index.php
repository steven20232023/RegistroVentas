<?php 
    require('../../Model/bd_sql.php');
    $conexion= new Conection();
    $lisproductos = $conexion->getListar();   

    $listclientes = $conexion->getCliente();
    
?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" crossorigin="anonymous">
    <style>
      .nav li{
        border: 1px solid #fff;
      }
    </style>
    <title>App Qhali</title>
  </head>
  <body style="font-size: 0.9rem;">
    <nav class="navbar navbar-expand-lg navbar-light bg-dark position-absolute d-inline-flex h-100">
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav flex-column navbar-nav">
          <li class="nav-item active">
            <a class="nav-link text-light" href="../../">Pedido <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="View/detallesVenta.php">Detalle Ventas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="View/producto.php">Producto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="">Configuracion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-light" href="">Perfil</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
        
        <h5 class="text-center pt-5 mb-4">Registro de Pedidos</h5> 
        
        <div class="d-flex justify-content-center">
            <div class="col-md-9 ">
            <a href="../../" class="badge badge-light float-left"><< Volver</a>
                <ul class="nav nav-tabs justify-content-center ">
                    <li class="nav-item1 border bg-warning p-2">Seleccionar Producto                        
                    </li>
                    <li class="nav-item2 border p-2">Cantidad
                        
                    </li>
                    <li class="nav-item3 border p-2">Pago
                        
                    </li>
                </ul>
                <div class="rounded-border" style="border: 1px solid #ccc; border-top:0" id="steven_acord">
                    
                    <div class="items p-5" id="item1">
                        <div class="d-flex justify-content-between">
                            <form class="form-inline">
                                <input class="form-control form-control-sm rounded-0" type="search" placeholder="Escriba producto" aria-label="Search">
                                <button class="btn btn-sm btn-info my-sm-0 rounded-0" type="submit">Buscar</button>
                            </form>
                            
                            <div class="form-inline">
                                <label for="" class="d-block mr-2">Codigo:</label>
                                <label for="">VEN001233</label>                                       
                            </div>                
                        </div>
                        <table class="table table-bordered bg-white mt-4" style="font-size: 13px;">
                            <thead class="thead-light">
                                <tr>
                                <th scope="col" >ID</th>
                                <th scope="col" >Nombre</th>
                                <th scope="col" >Cantidad</th>
                                <th scope="col" >Precio</th>
                                <th scope="col" >Fecha Ingreso</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($lisproductos as $value): ?>
                                <tr>
                                    <td><?php echo $value['OHR_Producto_ID']?></td>
                                    <td><?php echo $value['OHR_Nombre']?></td>
                                    <td><?php echo $value['OHR_CantidadStock']?></td>
                                    <td><?php echo $value['OHR_Precio']?></td>
                                    <td><?php echo $value['OHR_Fecha_A']?></td>
                                    <td>                                        
                                        <div class="form-check form-check-inline ml-3">
                                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="<?php echo $value['OHR_Producto_ID']?>">
                                            <label class="form-check-label" for="inlineRadio1"></label>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach;?>
                            </tbody>
                        </table>
                        
                    </div> 
                    <div class="items d-none p-5" id="item2">
                        <form action="" class="">
                            <div class="form-group row">
                                <label for="formGroupExampleInput" class="col-sm-4 col-form-label">Seleccione Cantidad:</label>
                                <div class="col-sm-2">
                                    <input class="form-control" type="number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="formGroupExampleInput" class="col-sm-4 col-form-label">Precio:</label>
                                <div class="col-sm-2">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="formGroupExampleInput" class="col-sm-4 col-form-label">IGV:</label>
                                <div class="col-sm-2">
                                    <input class="form-control" type="text" value="0.18" disabled>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="formGroupExampleInput" class="col-sm-4 col-form-label">Sub Total:</label>
                                <div class="col-sm-2">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="formGroupExampleInput" class="col-sm-4 col-form-label">Total:</label>
                                <div class="col-sm-2">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="items d-none p-5" id="item3">
                        <form action="" class="">
                            <div class="form-group row">
                                <select class="custom-select custom-select-sm col-md-5">
                                    <option selected disabled>Seleccionar cliente</option>
                                    <?php foreach($listclientes as $valuec)
                                    echo '<option value="'.$valuec['OHR_Cliente_ID'].'">'.$valuec['OHR_Nombres'].' '.$valuec['OHR_ApellidoPaterno'].'</option>';
                                    ?>
                                </select>
                                <div class="col">
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Nuevo Cliente</button>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Nuevo cliente</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="col-md-8 border border-secondary p-4">
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="inputEmail4">Nombre:</label>
                                                    <input type="text" class="form-control form-control-sm" id="nomb">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4">DNI:</label>
                                                    <input type="number" class="form-control form-control-sm" id="inputPassword4">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Apellido Paterno:</label>
                                                    <input type="text" class="form-control form-control-sm" id="inputPassword4" >
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Apellido Materno:</label>
                                                    <input type="text" class="form-control form-control-sm" id="inputPassword4">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Fecha Nacimiento:</label>
                                                    <input type="date" class="form-control form-control-sm" id="inputPassword4">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4">celular:</label>
                                                    <input type="number" class="form-control form-control-sm" id="inputPassword4">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Dirección:</label>
                                                    <input type="text" class="form-control form-control-sm" id="inputPassword4">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="inputPassword4">Distrito:</label>
                                                    <input type="text" class="form-control form-control-sm" id="inputPassword4">
                                                </div>
                                                <label for="">Género: </label>
                                                <div class="form-check form-check-inline ml-3">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Masculino</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">Femenino</label>
                                                </div>
                                            </div>                                                            
                                        </form>
                                    </div>
                                    <div class="text-center mb-3">
                                        <button type="button" class="btn btn-sm btn-success">Guardar</button>
                                    </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <label for="formGroupExampleInput" class="col-sm-4 col-form-label">Tipo de pago:</label>
                                <div class="form-check form-check-inline ml-3">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                    <label class="form-check-label" for="inlineRadio1">Tarjeta</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                    <label class="form-check-label" for="inlineRadio2">Yape</label>
                                </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" disabled>
                                    <label class="form-check-label" for="inlineRadio3">Efectivo</label>
                                </div>
                            </div>  
                            <div class="form-group row">
                                <label for="formGroupExampleInput" class="col-sm-4 col-form-label">Cupon</label>
                                <div class="col-sm-5">
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </div>
                        </form>
                        <div class="d-flex justify-content-around mb-4">
                            <button type="button" class="btn btn-sm btn-outline-info">Imprimir</button>
                            <button type="button" class="btn btn-sm btn-outline-info">Compartir</button>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">Codigo</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>dsd</td>
                                    <td>ff</td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div> 
                                        
                </div>    
                <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-dark btn-sm" id="return_items" disabled>Regresar</button>
                    <button type="button" class="btn btn-dark btn-sm" id="next_items">Siguiente</button> 
                </div>
                                                         
            </div>                                                                                   
            </div>
        </div>       
        
    </div>

    <script src="../../js/jquery-3.4.1.min.js"></script>    
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/styles.js"></script>
    
  </body>
</html>