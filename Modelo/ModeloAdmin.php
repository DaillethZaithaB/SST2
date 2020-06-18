<?php

require_once('Modelo/Conexion.php');

class ModeloUsuario{

    public function MostrarUsuario(){
                    try{

                        $ps=Conexion::Conecta()->prepare('select*from usuario inner join administrador ON usuario.id=administrador.id');
                        $ps->execute();
                        $datos=$ps->fetchAll();

                    }catch (Exception $e){
                        echo "Error al cargar el usuario".$e;
                    
                    }
   
    return $datos;
}

	    public function Select(){
                    try{

                        $ps=Conexion::Conecta()->prepare('select*from usuario ORDER BY id');
                        $ps->execute();
                        $datos=$ps->fetchAll();

                    }catch (Exception $e){
                        echo "Error al cargar el usuario".$e;
                    
                    }
   
    return $datos;
}
        public function Consulta($USARI){
                        
                            try{
                                $ps=Conexion::Conecta()->prepare("select * from usuario where Codigo like'%$USARI%' or Usuario like '%$USARI%' or Clave like '%$USARI%' or Rol like '%$USARI%' or Estado like '%$USARI%' or Foto like '%$USARI%'");
                                $ps->execute();
                                $datos=$ps->fetchAll();
    
                            }
                            catch (Exception $e){
                                echo "Error al hacer la consulta".$e;
                            }
            return $datos;
                  }

    public function Nuevo(){
                        
                    try{
                        $ps=Conexion::Conecta()->prepare("select * from usuario where codigo not in (select CODIGO_EMPLEADO from empleado)");
                        $ps->execute();
                        $usuarios=$ps->fetchAll();
    
                    }
                    catch (Exception $e){
                        echo "Error al hacer la consulta".$e;
                    }
                    return $usuarios;
                }

    public function InsertarUsuario($codigo,$nombre,$apellido,$edad,$sexo,$direccion,$correo,$telefono,$tipodoc,$numdoc,$rol,$clave,$estado,$elo,$foto){

              
                    try{
                    $ps=Conexion::Conecta()->prepare ('insert into usuario values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)');
                    $ps->bindParam(1,$codigo);
                    $ps->bindParam(2,$nombre);
                    $ps->bindParam(3,$apellido);
                    $ps->bindParam(4,$edad);
                    $ps->bindParam(5,$sexo);
                    $ps->bindParam(6,$direccion);
				    $ps->bindParam(7,$correo);
                    $ps->bindParam(8,$telefono);
                    $ps->bindParam(9,$tipodoc);
                    $ps->bindParam(10,$numdoc);
                    $ps->bindParam(11,$rol);
                    $ps->bindParam(12,$clave);
				    $ps->bindParam(13,$estado);
                    $ps->bindParam(14,$elo);
                    $ps->bindParam(15,$foto);
                   
                
            
                      if ($ps->execute()){
                                  $rs=1;
            
                              }
                            else{
                                  $rs=0;}
            
                    }catch(Exception $e){
                        echo "ERROR AL INSERTAR Usuario".$e;
                    }
                    return $rs;
                }

                // DESDE AQUI VA ACTUALIZAR

                public function dos($codigo)
              {
                  try{
                     $usu=Conexion::conecta()->prepare('select * from usuario where Codigo=?;');
                  $usu->bindParam(1, $codigo);
                  $usu->execute();
                  $usuarios=$usu->fetchAll();
                  } catch (Exception $e) {
                      echo "Error en la Consulta ".$e;
                  }
                  return $usuarios;
              }

              public function ActualizarUsuario($codigo, $usuario, $clave,$rol, $estado, $foto){

              
                try{
                $ps=Conexion::Conecta()->prepare ('update usuario set Usuario=?, Clave=?,
                Rol=?, Estado=?, Foto=? where Codigo=?;');
                
                $ps->bindParam(1,$usuario);
                $ps->bindParam(2,$clave);
                $ps->bindParam(3,$rol);
                $ps->bindParam(4,$estado);
                $ps->bindParam(5,$foto);
                $ps->bindParam(6,$codigo);

                  if ($ps->execute()){
                              $rs=1;

                          }
                        else{
                              $rs=0;}

                }catch(Exception $e){
                    echo "ERROR AL INSERTAR EL USUARIO".$e;
                }
                return $rs;
            }

            public function EliminarUsuario($Codigo){

                try {
                    
                    $ps = Conexion::Conecta()->prepare("Delete from usuario where Codigo = ?;");
                    $ps->bindParam(1, $Codigo);
    
                    if($ps->execute()){
                        $r = 1;
                    }else{
                        $r = 0;
                    }
                    
                } catch (Exception $e) {
                    
                    echo "Error al realizar la eliminacion ".$e;
    
                }
    
                return $r;
                
            }


            public function LOGIN($usuario, $clave){
                        
                try{
                    $ps=Conexion::Conecta()->prepare("call Log (?,?);");
                    $ps->bindParam(1, $usuario);
                    $ps->bindParam(2, $clave);
                    $ps->execute();
                    $datos=$ps->fetchAll();

                }
                catch (Exception $e){
                    echo "Error al Loguearse".$e;
                }
        return $datos;
            }

          
}

?>