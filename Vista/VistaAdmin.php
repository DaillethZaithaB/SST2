<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <link rel="icon" href="">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="MD-BOOTSTRAP-PRO/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="MD-BOOTSTRAP-PRO/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="MD-BOOTSTRAP-PRO/css/style.css" rel="stylesheet">

  <link rel="stylesheet" href="MD-BOOTSTRAP-PRO/css/addons-pro/cards-extended.css">
  <link rel="stylesheet" href="MD-BOOTSTRAP-PRO/css/addons-pro/chat.css">
  <link rel="stylesheet" href="MD-BOOTSTRAP-PRO/css/addons-pro/stepper.css">
  <link rel="stylesheet" href="MD-BOOTSTRAP-PRO/css/addons-pro/timeline.css">
  

	<title>Document</title>
</head>

<body class="fixed-sn white-skin">


    				
	


    <!--link Menu-->
  <?php include 'Menu/menu.php';?>

 
  <script></script>

    <center><div class="col-sm-6" class="container"  style="background: #D0D1E4; align:center;"> 

        <form action="" method="POST" class="SEGUNDO">      
        <h2 style="text-align:center; color:Black;">ELIJA LA ACCION QUE DESEA HACER </h2>
            
            <h4 style="text-align:center; color:Black;">Mostrar el Usuario</h4>
            <center><input class="btn btn-primary btn-lg" type="submit" name="cargarusuario" value="Mostrar el Usuario"></center>

            <h4 style="text-align:center; color:Black;">¿Hacer una consultar?</h4>
            <center><input type="search" name="USARI"><input class="btn btn-primary btn-lg" type="submit" name="Consultar" value="CONSULTAR"> </center>

            <h4 style="text-align:center; color:Black;">Ingresar un nuevo registro</h4>
            <center><input class="btn btn-primary btn-lg" type="submit" name="Ingresar" value="INGRESE UN NUEVO REGISTRO"></center>

             <h4 style="text-align:center; color:Black;">Ingresar un nuevo registro</h4>
            <center><input class="btn btn-primary btn-lg" type="submit" name="cargar" value="INGRESE "></center>
        </form>

        </div></center>
<!---ingreso de datos baby--->
        <?php  if(isset($_POST['cargar'])){ ?>     
            
			   
	


	
            <br><center><div class="col-sm-6" class="container"  style="; align:center;">  

                <center><form action="" method="POST"  enctype="multipart/form-data" class="PRIMERO">
                    <input type="text" value="id" name="id">
                    
                   <select class="mdb-select md-form" searchable="Busqueda por nombre" class="select_usuario" onchange="select_usuario();">
					  <option value="" disabled selected>Selecciona el nombre</option>
					   <?php foreach ($usuarios as $u){ ?>
					  
					 <option value="<?php echo $u[1]; ?>" class="select_usuario"  ><?php echo $u[1]; ?></option>
					 <?php } ?> 
					
					</select>
					   
                       
                
				<input type="text" name="nombre">
				<input type="text" name="correo">
				<input type="text" name="clave">
					
          

                    <br><center> <input class="btn btn-outline-danger" type="submit" name="cargardatos" value="INGRESAR"></center>
                </form></center>

                </div></center>
        <?php } ?> 


<?php if(isset($_POST['cargarusuario']) or isset($_POST['Consultar'])){ ?>
<style>
	a{
		margin: 7px;
	}
	</style>
    <br><center><div class="col-sm-8" class="container"  >
    
<h1 class="section-heading h1 pt-4" style="color:white">Administrador</h1>

<center>
        <table>
            
       
                
                <?php 
                
                    foreach ($usuarios as $u){ ?>
                    
                        
                            
                    <div style="margin-left:220px"> 
				<section class="section text-center">

				  <div class="row">

					<div class="col-lg-8 col-md-12 mb-7">

					  <!--Card-->
					  <div class="card testimonial-card">

						<!--Background color-->
						<div class="card-up blue lighten-2">
						</div>

						<!--Avatar-->
						<div class="avatar mx-auto white" style="height:130px"><img src="img/<?php echo $u[14]; ?>" alt="" 
							alt="avatar mx-auto white" class="img-circle img-fluid">

						</div>

						<div class="card-body">
						  <!--Name-->
						  <h4 class="card-title mt-1"><?php echo $u[1]; ?> <?php echo $u[2]; ?></h4>
						  <hr>
						  <!--Quotation-->
						    <p><a>Fecha nacimiento: <?php echo $u[3]; ?></a>
                            <a>Sexo:<?php echo $u[4]; ?></a></p>
                            
                            <p><a>Dirección:<?php echo $u[5]; ?></a>
                            <a>Correo:<?php echo $u[6]; ?></a></p>
                            
                            <p><a>Telefono:<?php echo $u[7]; ?></a>
                            <a>Tipo documento:<?php echo $u[8]; ?></a></p>
                            <p><a>Numero documento:<?php echo $u[9]; ?></a>
							<a>Rol:<?php echo $u[10]; ?></a></p>
							<p>
							<a>Clave:<?php echo $u[11]; ?></a>
							<a>Estado:<?php echo $u[12]; ?></a>
							<a>Elo:<?php echo $u[13]; ?></a></p>
							     
                            <a>
                                <form action="" method="POST">
                                
                                    <input type="hidden" class="btn btn-outline-primary" name="codi" value="<?php echo $u[0]; ?>">
                                   <button  type="submit" class="btn btn-primary" name="Modifica"><i class="far fa-edit" ></i></button>
                                    <input type="hidden" class="btn btn-outline-primary" name="codi" value="<?php echo $u[0]; ?>">
                                    <button type="submit" class="btn btn-danger" onclick="return ConfimoDelete()"><i class="fas fa-trash-alt"></i></button>
                                    
                                </form>
                            

                                <form action="" method="POST">
                                    
                                </form>
                           </a>
						</div>

					  </div>
					  <!--Card-->

					</div>
					<!--Grid column-->

					</div>

				</section>
				</div>
				<!--Section: Testimonials v.1-->
                        
                            <td>
                                <form action="" method="POST">
                                    <input type="hidden" class="btn btn-outline-primary" name="codi" value="<?php echo $u[0]; ?>">
                                    <input type="submit" class="btn btn-outline-primary" name="Modifica" value="Actualizar">
                                </form>
                            </td>

                            <td>
                                <form action="" method="POST">
                                    <input type="hidden" class="btn btn-outline-primary" name="codi" value="<?php echo $u[0]; ?>">
                                    <input type="submit" class="btn btn-outline-primary" name="elimina" value="Eliminar" onclick="return ConfimoDelete()">
                                </form>
                            </td>

                            
               
                       
                <?php } ?>        

                     
        </table>
                    <?php } ?>
      </center>

      </div></center>

      <!-- DESDE AQUI SE MANEJA ACTUALIZAR PERO ANTES SE AGREGA LOS DOS BOTONES EN EL FORM DE ARRIBA-->

      <?php if(isset($_POST['Modifica'])) {?>

        <br><center><div class="col-sm-6" class="container"  style="background: #0B0F67; align:center;">
           
            <form action="" method="POST" class="PRIMERO">
            <?php foreach($datar as $A){ ?>
                <center><div class="col-sm-4" class="container" style="background: #D0D1E4; align:center;"> <center><label style="color:black;"> FORMULARIO PARA ACTUALIZO DE DATOS </label></center></div>      

                 
            <label  style="color: white;">Codigo: <?php echo $A[0];?></label><br>
                            <input  type="hidden" name="codi" require value="<?php echo $A[0];?>">

                            <label  style="color: white;">INGRESE SU USUARIO</label>
                            <input class="form-control" type="text" name="Usuario" value= <?php echo $A[1];?>>

                            <label  style="color: white;">INGRESE SU CLAVE</label>
                            <input class="form-control" type="text" name="Clave" value= <?php echo $A[2];?>>
                                        
                        
                            <label  style="color: white;">INGRE SU NUEVO ROL</label>
                            <select name="Rol" id="" class="form-control">

                                <option value="Contabilidad">Contabilidad</option>
                                <option value="Investigacion">Investigacion</option>
                                <option value="Produccion">Produccion</option>
                                <option value="Seguridad">Seguridad</option>
                                <option value="Ventas">Ventas</option>

                            </select>
                      

                            <label  style="color: white;">INGRESE SU ESTADO</label><br>
                            <input class="form-control" type="number" name="Estado" value= <?php echo $A[4];?>>
                            
                            <label  style="color: white;">INGRESE SU FOTO</label>
                            <input class="form-control" type="text" name="Foto" value= <?php echo $A[5];?>>

                            <center> <input class="btn btn-outline-danger" type="submit" name="actualizar" value="Actualizar USUARIO"></center>
                                <?php } ?>
				</center>
                        </form>

                        </div>
        <?php } ?>
              
	</center>


</body>
 <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/mdb.min.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/addons-pro/stepper.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/addons-pro/timeline.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/modules/buttons.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/modules/cards.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/modules/character-counter.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/modules/chips.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/modules/collapsible.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/modules/default-file-input.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/modules/dropdown.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/modules/file-input.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/modules/forms-free.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/modules/material-select.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/modules/mdb-autocomplete.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/modules/preloading.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/modules/range-input.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/modules/scrolling-navbar.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/modules/sidenav.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/modules/smooth-scroll.js"></script>
  <script type="text/javascript" src="MD-BOOTSTRAP-PRO/js/modules/sticky.js"></script>
  <script src="https://kit.fontawesome.com/286a6932d0.js" crossorigin="anonymous"></script>
   <script type="text/javascript" src="js/select.js"></script>
 

</html>