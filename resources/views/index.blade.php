@extends('layouts.app')
@section('title', 'Home')
@section('content')
<!-- Contenedor del Mapa  -->
<div class="row">
  <div id="map" class="col-xs-12"></div>
</div>
<!-- Script del Mapa en JS -->
<script>
  function initMap() {
    // Create a map object and specify the DOM element for display.
    var map = new google.maps.Map(document.getElementById('map'), {
      center: {lat: -34.5497435, lng: -58.4441386},
      scrollwheel: false,
      zoom: 15
    });

    var imagen = 'imagenes/dog-icon1.png';

    // Marcador
    var marcadorPerro = new google.maps.Marker({
      position: {lat: -34.5497435, lng: -58.4441386},
      map: map,
      icon: imagen,
      title: 'Perro perdido',

});

  }

</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDqIMwzgMBvFQl-PS1XtK16k30Ham_XDY8&callback=initMap"
async defer></script>



@endsection
