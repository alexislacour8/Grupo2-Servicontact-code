<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	
	<link href="bootstrap/bootstrap.min.css" rel="stylesheet">
	<link href="includes/css/registro.css" rel="stylesheet">
	<script type="text/javascript" src="includes/js/jquery.js"></script>
	<script src="includes/js/validacion.js"></script>
	<script type="application/javascript" src="includes/js/notify.js"></script>
	<script src="bootstrap/bootstrap.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
	<script src="https://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    <script>
    
    </script>
</head>
<body>
	<br>
	<div class="container">
	<center><img src="images/trabajos.png" class="logo"></center>
	
	
	<div class="modal fade" id="ventana">
		<div class="modal-dialog">
			<div class="modal-content">
            <div class="modal-header">  
                 <h2 class="modal-title">Su cuenta ha sido registrada con exito</h2>
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
			<div class="modal-body">
                  <h5>En breve le llegara un mensaje a su casilla de correo</h5>
                  <h5> para activar su cuenta</h5>
                  <p>Mientras tanto puedes explorar el sitio</p>
             </div>
             <div class="modal-footer">
                  <button type="button" onclick="location.href='index.php';" data-dismiss="modal" class="btn btn-success">Okay</button> 
             </div>
            </div>
         </div>
    </div>
	
	
	
 	<form action="includes/php/register.php" name="formadd" method="POST" id="formguardard" enctype="multipart/form-data">

 		<center>
 		<div class="form-group ">
		
				<div class="contenedor">
					<div class="col-6">
						<input type="text" class="form-control"  id="txtnombre" name="nombre" placeholder="Nombre">	
					</div>
					<div class="col-6">
		 			    <input type="text" class="form-control" id="txtapellido" name="apellido" placeholder="Apellido">
					</div>
		 			<br>		 			
		 			<br>
					<div class="col-6">
		 			    <input type="text" class="form-control" id="txtmail" name="email"  placeholder="E-Mail">
					</div>
					 <div class="col-6">
		 			    <input type="password" class="form-control" id="txtcontra" name="contrasena" placeholder="Contraseña">
					</div>
		 			<br>
					<div class="col-12">
		 			    <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" >
					</div>
		 			<br>
		 			<br>
					<!-- Para las provincias y ciudades-->
					<div class="col-12">
    				    <select id="provincia" name="provincia" class="cinc btn btn-primary  dropdown-toggle" type="button"data-toggle="dropdown" required>Provincias
    				    <span class="caret"></span>
    				    </select>
    				    <select id="ciudad" name="ciudad" class="cinc btn btn-primary  dropdown-toggle" type="button"data-toggle="dropdown" required>Localidades<span class="caret"></span>
    				    </select>
    				</div>
    				
                    	<br>
                        <br>
					<div class="col-md-12 col-lg-12">
						<input type="text" class="form-control"  id="txtdir" name="dir" placeholder="Dirección" >
					</div>
	 			</div>
		
		
		
		
				
				<!-- CONTENEDOR NUEVO 
				<div class=" contenedor">
					
					<div class="col-md-4 mb-3">
						<input type="text" id="txtnombre" minlength="3" maxlength="40"  pattern="[A-Za-z].{3,45}" name="nombre" class=" cinc form-control"  placeholder="Nombre" title="El nombre debe tener entre 3 y 40 caracteres" placeholder="Enter email" required>		
					</div>
					<div class="col-md-4 mb-3">
						<input type="text" id="txtapellido" minlength="3" maxlength="40" pattern="[A-Za-z].{3,45}" name="apellido" class=" cinc form-control" title="El apellido debe contener entre 3 y 40 caracteres"  placeholder="Apellido" placeholder="Enter email" required>
					</div>
		 			<br>		 			
		 			<br>
					<div class="col-md-4 mb-3">					
						<input type="email" class=" cinc form-control" id="txtmail" name="email" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" title="Debe introducir una direccion de correo valida" minlength="10" maxlength="120" placeholder="mail" required >
					</div>
					 <div class="col-md-4 mb-3">		
						<input type="password" id="txtcontra" name="contrasena" minlength="8" maxlength="80" pattern=".{8,80}" title="La contraseña debe contener entre 8 y 80 caracteres" maxlength="15" class="cinc form-control"   placeholder="password" required >
					</div>
		 			<br>
					<div class="col-md-4 mb-3">	
						<input type="number" id="telefono" name="telefono" pattern="[0-9]{8,11}" title="Debe introduccir un telefono valido de entre 8 y 11 caracteres" minlength="8" maxlength="11" class="col-12 form-control"   placeholder="Teléfono" required  >
					</div>
		 			<br>
		 			<br>
					
					<div class="col-12">
    				 <select id="provincia" name="provincia" class="cinc btn btn-primary  dropdown-toggle" type="button"data-toggle="dropdown" required>Provincias
    				<span class="caret"></span>
    				</select>
    				<select id="ciudad" name="ciudad" class="cinc btn btn-primary  dropdown-toggle" type="button"data-toggle="dropdown" required>Localidades<span class="caret"></span>
    				</select>
    				</div>
    				
                    	<br>
                        <br>
					<div class="col-md-4 mb-3">	   
						<input type="text" class="form-control cien" id="txtdir" name="dir" minlength="5" maxlength="80" placeholder="Dirección" required >
					</div>
	 			</div>
				-->
				
				<!-- CONTENEDOR VIEJO
 				<div class=" contenedor">
		 			<input type="text" id="txtnombre" minlenght="3" maxlenght="40"  pattern="[A-Za-z]" name="nombre" class=" cinc form-control"  placeholder="Nombre" title="El nombre debe tener entre 3 y 40 caracteres" placeholder="Enter email" required>		 			
		 			<input type="text" id="txtapellido" minlenght="3" maxlenght="40" pattern="[A-Za-z]" name="apellido" class=" cinc form-control" title="El apellido debe contener entre 3 y 40 caracteres"  placeholder="Apellido" placeholder="Enter email" required>
		 			<br>		 			
		 			<br>		 		
		 			<input type="email" class=" cinc form-control" id="txtmail" name="email" title="Debe introducir una direccion de correo valida" minlenght="10" maxlenght="120" placeholder="mail" required >
		 			<input type="password" id="txtcontra" name="contrasena" minlenght="8" maxlenght="60" title="La contraseña debe contener entre 8 y 60 caracteres" maxlength="15" class="cinc form-control"   placeholder="password" required >
		 			<br>
		 			<input type="number" id="telefono" name="telefono" title="Debe introduccir un telefono valido de entre 8 y 11 caracteres" minlenght="8" maxlength="11" class="col-12 form-control"   placeholder="Teléfono" required >
		 			<br>
		 			<br>
					
					<div class="col-12">
    				 <select id="provincia" name="provincia" class="cinc btn btn-primary  dropdown-toggle" type="button"data-toggle="dropdown" required>Provincias
    				<span class="caret"></span>
    				</select>
    				<select id="ciudad" name="ciudad" class="cinc btn btn-primary  dropdown-toggle" type="button"data-toggle="dropdown" required>Localidades<span class="caret"></span>
    				</select>
    				</div>
    				
                    	<br>
                        <br>
                        
					<input type="text" class="form-control cien" id="txtdir" name="dir" minlenght="5" placeholder="Dirección" required>
	 			</div>
				
				-->
				 <output id="list"></output>
	 			<div class="fotos col-12 btn btn-success">
	 				<p ><i class="icon fas fa-download"></i>Foto de Perfil</p>
	 			<input type="file"  name="imagen" accept="image/*" id="fil">
	 			</div>
	 		  <br>
	 		  <br> 
	 		   <button type="submit" name="submit" id="boton"  class="btn btn-primary"  value="Upload">Registrar</button>
 	     </div>
		</center>
	
		<div id="alerta"></div>
 </form>
</div>

		<!-- Para las provincias y ciudades, es una mountrocidad lose, si alguien lo quiere cambiar es bienvenido-->
	<script>
	
	$( document ).ready(function() {
		
		
		$.getJSON('ciudades-argentinas.json',function(result){
				$.each(result,function(i,provincia){
					var opcion="<option value='"+provincia.nombre+"' data-id='"+provincia.id+"'>"+provincia.nombre+"</option>";
					$("#provincia").append(opcion);
				})
				var selecionado=$("#provincia").find('option:first').data('id');
				console.log(selecionado);
				$.getJSON('ciudades-argentinas.json',function(result){
				$.each(result,function(ciudad,nombreciudad){
				if(selecionado==nombreciudad.id){
					$.each(nombreciudad.ciudades,function(i,city){
						
						var opcion="<option value='"+city.nombre+"'>"+city.nombre+"</option>";
						$("#ciudad").append(opcion);
					})
					
				}
				})
				})
			})		
	});

	$("#provincia").change(function(){
		$('#ciudad').attr('disabled', false)
		var idprovincia=$(this).find(":selected").data('id');
		$("#ciudad option").each(function() {
			$(this).remove();
		});
		$.getJSON('ciudades-argentinas.json',function(result){
			$.each(result,function(ciudad,nombreciudad){
				if(idprovincia==nombreciudad.id){
					$.each(nombreciudad.ciudades,function(i,city){
						
						var opcion="<option value='"+city.nombre+"'>"+city.nombre+"</option>";
						$("#ciudad").append(opcion);
					})
					
				}
			})
		})
	}
);
			
	</script>


		<!-- Para el placeholder de la imagen-->
	<script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object
             
                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }
             
                    var reader = new FileReader();
             
                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb img-circle thumbnailmascota" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
                        };
                    })(f);
             
                    reader.readAsDataURL(f);
                  }
              }
             
              document.getElementById('fil').addEventListener('change', archivo, false);
      </script>

			  <!-- Para el error-->
			  <!-- Posiblemente inservible
	<script>
	
	$(document).ready(function(){
		var $_GET=[];
		window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi,function(a,name,value){$_GET[name]=value;});
		var trigger=$_GET['trigger'];
		if(trigger==2){
			$.notify("Ha ocurrido un error debido a que la direccion de email ya se encuentra registrada o los parametros son invalidos", "error");
		}
		else if(trigger==1){
			$.notify("Ha ocurrido un error debido a que los parametros son invalidos", "error");
		}
		else if(trigger==3){
		    $('#ventana').modal('show'); 
		}
	});
	

	</script>
-->
	<!-- Para la validacion -->

<script>
	$("#formguardard").submit(function(){
		event.preventDefault();
		console.log(validar());
		if(validar()){
			
			var formData = new FormData($(this)[0]);
			
			$.ajax({
				data:formData,
				url:this.action,
				type:this.method,
				processData: false,
				contentType: false,
				success: function (data) {
					if(data=="Se ha registrado exitosamente"){
						$('#ventana').modal('show'); 
						$.notify(data, "success");
					}else{
						$.notify(data, "error",{
							autoHide: false,
							clickToHide: true});
						console.log(data);
					}
				}
			})
		}
	});
</script>

</body>
</html>