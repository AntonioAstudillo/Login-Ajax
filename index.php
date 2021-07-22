<!DOCTYPE html>
<html lang="es" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="script.js" charset="utf-8"></script>
      <link rel="stylesheet" href="estilos.css">
   </head>
   <body>
      <div class="centrar">
         <form id="formulario" action="validar.php" method="post" autocomplete="off">
            <div class="container">
               <div class="row mt-4">
                  <div class="col-12">
                     <label for="">Usuario</label>
                     <input class="form-control" id="nombre" type="text" value="" name="nombre" placeholder="Ingrese nombre">
                  </div>
               </div>

               <div class="row mt-4">
                  <div class="col-12">
                     <label for="">Password</label>
                     <input class="form-control" id="password" type="password" value="" name="password" placeholder="Ingrese password">
                  </div>
               </div>
               <input class="btn btn-primary bt-lg btn-block mt-3 font-weight-bold " type="submit" name="" value="Ingresar">
            </div>
         </form>
      </div>
   </body>
</html>
