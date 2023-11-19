<?php  

class Conection{
    private $con;

    public function __construct(){
       
        $this->con = new PDO("sqlsrv:Server=STEVEN-ADMIN; database=dbQhali_O", "sa", "steven");
                
        /*
        $serverName = "STEVEN-ADMIN\sqlexpress"; //serverName\instanceName
        $connectionInfo = array( "Database"=>"dbQhali_O", "UID"=>"sa", "PWD"=>"steven");
        $conn = sqlsrv_connect( $serverName, $connectionInfo);
        */
        
    }

    public function getListar(){
        $consulpro = $this->con->prepare('SELECT TOP 5 OHR_Producto_ID, OHR_Nombre, OHR_CantidadStock, OHR_Precio, OHR_Fecha_A FROM OHR_tblProducto');
        $consulpro->execute();
        $data = $consulpro->fetchAll(PDO::FETCH_ASSOC);                 
        return $data;
    }

    public function getCliente(){
        $consulcli = $this->con->prepare('SELECT OHR_Cliente_ID, OHR_Nombres, OHR_ApellidoPaterno, OHR_ApellidoMaterno FROM OHR_tblCliente');
        $consulcli->execute();
        $data = $consulcli->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getPedido(){
        $consulped= $this->con->prepare('SELECT OHR_Pedido_ID, OHR_Cliente_ID, OHR_Repartidor_ID, OHR_FormaPago, OHR_Estado, OHR_Fecha, OHR_PedidosTotal FROM OHR_tblPedido');
        $consulped->execute();
        $data = $consulped->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }

    public function getListarPro(){
        $consulpro = $this->con->prepare('SELECT OHR_Producto_ID, OHR_Pedido_ID, OHR_Proveedor_ID, OHR_Nombre, OHR_Descripcion, OHR_CantidadStock, OHR_Precio FROM OHR_tblProducto');
        $consulpro->execute();
        $data = $consulpro->fetchAll(PDO::FETCH_ASSOC);                 
        return $data;
    }
}
