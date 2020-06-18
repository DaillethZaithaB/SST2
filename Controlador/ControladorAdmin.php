<?php
require_once('Modelo/ModeloAdmin.php');

$usu=new ModeloUsuario();

if(isset($_POST['cargarusuario'])){
$usuarios=$usu->MostrarUsuario();
}
//select 
if(isset($_POST['cargar'])){
$usuarios=$usu->Select();
}


if (isset ($_POST['Consultar'])){
    $USARI=$_POST["USARI"];
    $usuarios=$usu->Consulta($USARI);  

}



if (isset($_POST['cargardatos']))
    {
        $codigo=$_POST['id'];
        $nombre=$_POST['nombre'];
	    $apellido=$_POST['apellido'];
	    $edad=$_POST['edad'];
	    $sexo=$_POST['sexo'];
	    $direccion=$_POST['direccion'];
	    $correo=$_POST['correo'];
	    $telefono=$_POST['telefono'];
	    $tipodoc=$_POST['tipodoc'];
	    $numdoc=$_POST['numdoc'];
	    $rol=$_POST['rol'];
	    $clave=$_POST['clave'];
	    $estado=$_POST['estado'];
	    $elo=$_POST['elo'];
	    $foto=$_FILES['foto']['name'];
	    $tipo=$_FILES['foto']['type'];
	    $tam=$_FILES['foto']['size'];
	    if($foto!=null){
			if($tipo=="image/gif" || $tipo="image/png" || $tipo="image/jpeg" || $tipo="aplication/pdf"){
			 if($tam<=1000000){
				 $hoy=date('dmy');
				 $foto=$hoy."_".$codigo."_".$foto;
				 $carpeta_destino=$_SERVER['DOCUMENT_ROOT'].'/SST/img/';
				 
			 }
			}
		}
    

        if($codigo>0)
        {
			copy($_FILES['foto']['tmp_name'],$carpeta_destino.$foto);
        $result=$usu->InsertarUsuario($codigo,$nombre,$apellido,$edad,$sexo,$direccion,$correo,$telefono,$tipodoc,$numdoc,$rol,$clave,$estado,$elo,$foto);
            if ($result>0)
            echo "<script type='text/javascript'>alert('Usuario Registrado Correctamente');</script>";
            else
            echo "<script type='text/javascript'>alert('No se registro el usuario');</script>";
        }
        else{

            echo "<script type='text/javascript'>alert('Se debe registrar el usuario contacte al departamento');</script>";

        }

    }


    if(isset($_POST['Modifica'])){
        $codigo=$_POST['codi'];
        $datar=$usu->dos($codigo);
    
    }

    if(isset($_POST['actualizar'])){
        $codigo=$_POST['codi'];
        $usuario=$_POST['Usuario'];
        $clave=$_POST['Clave'];
        $rol=$_POST['Rol'];
        $estado=$_POST['Estado'];
        $foto=$_POST['Foto'];

                $res=$usu->ActualizarUsuario($codigo, $usuario, $clave,$rol,$estado,$foto);
                    if ($res>0){
                    echo "<script type='text/javascript'>alert('USUARIO Actualizado Correctamente');</script>";
                    }else{
                    echo "<script type='text/javascript'>alert('No se actualizo el usuario');</script>";
                    }

    }

    if(isset($_POST['elimina'])){

        $codigo = $_POST['codi'];
    
        $res=$usu->EliminarUsuario($codigo);
    
        if ($res > 0) {
    
            echo "<script type='text/javascript'>alert('Usuario eliminado exitosamente');</script>";
        } else {
    
            echo "<script type='text/javascript'>alert('No se ha eliminado el Usuario');</script>";
        }
    }
    


    

    require_once('Vista/VistaAdmin.php');
     require_once('Formulario/FormA0.php');



?>