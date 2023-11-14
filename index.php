<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">

    <title>App Qhali</title>
  </head>
  <body style="font-size: 0.9rem;">
    
    <div class="container">
        <h3 class="text-center mt-5 mb-4">Registro de Ventas</h3> 
        <div class="d-flex justify-content-center">
            <div class="text-center col-md-9 ">
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
                        <table class="table table-bordered bg-white mt-4">
                            <thead class="thead-light">
                                <tr>
                                <th scope="col" >Codigo</th>
                                <th scope="col" >Nombre</th>
                                <th scope="col" >Categoría</th>
                                <th scope="col" >Cantidad</th>
                                <th scope="col" >Fecha Ingreso</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <td scope="row">Codigo</td>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                </tr>
                                <tr>
                                <td scope="row">2</td>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                </tr>
                                <tr>
                                <td scope="row">3</td>
                                <td>Larry the Bird</td>
                                <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                        
                    </div> 
                    <div class="items d-none p-5" id="item2">
                        <form action="" class="text-right">
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
                                    <input class="form-control" type="text">
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
                        <form action="" class="text-right">
                            <div class="form-group row">
                                <label for="formGroupExampleInput" class="col-sm-4 col-form-label">Total a pagar:</label>
                                <div class="col-sm-5">
                                    <input class="form-control form-control-sm" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="formGroupExampleInput" class="col-sm-4 col-form-label">Correo: </label>
                                <div class="col-sm-5">
                                    <input class="form-control form-control-sm" type="text">
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
                            <button type="button" class="btn btn-sm btn-secondary">Imprimir</button>
                            <button type="button" class="btn btn-sm btn-secondary">Compartir</button>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
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
    
    <script src="js/jquery-3.4.1.min.js"></script>    
    <script src="js/bootstrap.min.js"></script>
    <script src="js/styles.js"></script>
    
  </body>
</html>