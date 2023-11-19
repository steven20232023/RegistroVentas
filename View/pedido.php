<?php

require('header.php')
?>

    <div class="container">
        <h5 class="text-center pt-5 mb-4">Pedidos</h5>
        <div class="d-flex justify-content-center">
            <div class="col-md-10">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Cliente</th>
                            <th scope="col">Repartidor</th>
                            <th scope="col">Tipo de Pago</th>
                            <th scope="col">Estado</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Total</th>      
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($listpedidos as $valuep): ?>
                        <tr>                            
                            <td><?php echo $valuep['OHR_Pedido_ID']?></td>
                            <td><?php echo $valuep['OHR_Cliente_ID']?></td>
                            <td><?php echo $valuep['OHR_Repartidor_ID']?></td>
                            <td><?php echo $valuep['OHR_FormaPago']?></td>
                            <td><?php echo $valuep['OHR_Estado']?></td>
                            <td><?php echo $valuep['OHR_Fecha']?></td>
                            <td><?php echo $valuep['OHR_PedidosTotal']?></td>                            
                        </tr>
                        <?php endforeach;?>
                        
                    </tbody>
                </table>
                <button type="button" class="btn btn-sm btn-success float-right"><a href="View/RegistrarPedido/" class="text-light">Nuevo Pedido</a></button>

            </div>
            
        </div>
        
    </div>
<?php require('footer.php')?>