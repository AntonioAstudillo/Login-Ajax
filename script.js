window.onload = validarUsuario;



function validarUsuario(){
   var formulario = document.getElementById('formulario');
   var peticion;
   var string_query;

   formulario.addEventListener('submit',function(e){
      let usuario = document.getElementById('nombre');
      let password = document.getElementById('password');

      if(usuario.value != '' && password.value != ''){
         peticion = crearObjetoXML();
         string_query = crearQuery(usuario.value,password.value);
         peticion.onreadystatechange = respuestaCredenciales;
         peticion.open('POST','validar.php', true);
         peticion.setRequestHeader('Content-type','application/x-www-form-urlencoded');
         peticion.send(string_query);
         e.preventDefault();

      }else{
         alert("Los campos no pueden estar vacios");
         e.preventDefault();
      }

   });

   function crearObjetoXML(){
      return new XMLHttpRequest();
   }

   function crearQuery(u,p){
      return "nombre="+u+"&password="+p;
   }

   function respuestaCredenciales()
   {
       if(peticion.readyState == 4)
       {
         if(peticion.status == 200)
         {
            let valor = peticion.responseText;
            console.log(valor);

            if(valor == 'TRUE'){
               window.location.href = 'sistema.php';
            }else{
               alert("Ese usuario no existe");
            }
         }
      }
   }
}
