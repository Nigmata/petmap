@extends('layouts.app')
@section('title', 'FAQS')
@section('content')
  <div class="row imagenfondo">
    <div style="height: 200px,">
      <p>
        <br><br><br><br>
      </p>
    </div>
  </div>

  <div class="row">

    <div class="col-xs-12 col-md-10 col-md-offset-1 fondo">
      <div class="contenido">


        <h1>FAQs</h1>

    <div class="contenedor">


      <div class="item">
        <div class="pregunta">
        <button type="button" id="myBtn" onclick="myFunction()"> P: ¿Como registrarse?</button>
        </div>
        <div class="respuesta">
         Es simple. Hace click en Registrate y segui los pasos.
        </div>
      </div>

      <div class="item">


        <div class="pregunta">
        <button type="button" id="myBtn" onclick="myFunction()">P: ¿Como encuentro mi perro? </button>
        </div>
        <div class="respuesta">
          Luego de registrarte, vas a la pagina principal y vas a ver un mapa con los perros que estan perdidos en tu zona. Siempre que permitas que la aplicacion PetMap acceda a tu ubicación. Tambien es posible acceder desde Encontrados.
        </div>
      </div>

      <div class="item">
        <div class="pregunta">
        <button type="button" id="myBtn" onclick="myFunction()">  P: ¿Como reporto un perro perdido? </button>
        </div>
        <div class="respuesta">
          Tenes que clickear en perdidos y seguir el procedimiento. Tendras que especificar: raza, sexo, color, tamaño, entre otras caracteristicas. Gracias por ayudar!
        </div>
      </div>
    </div>
  <script>

  window.onload = function() {
    var preguntas = document.getElementsByClassName("pregunta");
    for (var i = 0; i < preguntas.length; i++) {
      var pregunta = preguntas[i];
      pregunta.onclick = function() {
        if (this.nextElementSibling.style.display == "block") {
          this.nextElementSibling.style.display = "none";
        }
        else
        {
          this.nextElementSibling.style.display = "block";
        }

      }
    }
  }


  </script>

      </div>

    </div>

  </div>
@endsection
