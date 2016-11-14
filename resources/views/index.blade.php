@extends('layouts.app')
@section('title', 'Home')
@section('content')

  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
<!-- Contenedor del Mapa  -->
<div class="row">
  <div id="mapid" class="col-xs-12"></div>
</div>

<script>

	var mymap = L.map('mapid').setView([-34.603722, -58.381592], 13);

	L.tileLayer('https://api.mapbox.com/styles/v1/mapbox/streets-v10/tiles/256/{z}/{x}/{y}?access_token=pk.eyJ1IjoicGV0bWFwIiwiYSI6ImNpdW4zdHowcDAwY2MydHBrNHdnenc3aXoifQ.m4atwfvT9jHj1Up4KKTjDw', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);

</script>




<!-- Script del Mapa en JS -->
{{-- <script>
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
async defer></script> --}}



@endsection
