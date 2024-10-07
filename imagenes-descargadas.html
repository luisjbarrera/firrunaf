<!DOCTYPE html>
<html>
<head>
  <title>Mapa Interactivo de Escuelas</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> <!-- Agregada librería de SweetAlert2 -->

  <style>
    .row {
      display: flex;
    }
    #map {
      width: 80%;
      height: 800px;
    }
    #sidebar {
      width: 20%;
    }

    .navbar {
      width: 100%;
      background-color: #555;
      overflow: auto;
    }

    .navbar a {
      float: left;
      padding: 12px;
      color: white;
      text-decoration: none;
      font-size: 17px;
    }

    .navbar a:hover {
      background-color: #000;
    }

    .active {
      background-color: #04AA6D;
    }

    @media screen and (max-width: 500px) {
      .navbar a {
        float: none;
        display: block;
      }
    }
  </style>
</head>
<body>

  <div class="navbar">
    <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
    <a href="contribuciones.php"><i class="fa fa-fw fa-bar-chart-o"></i> My contribution</a>
    <a class="active" href="imagenes-descargadas.php"><i class="fa fa-fw fa-map-marker"></i> Map of collection centers</a>
    <a href="canjes.php"><i class="fa fa-fw fa-map-marker"></i> Redeem your points</a>
  </div>

  <div class="row">
    <div id="map"></div>
    <div id="sidebar">
      <h2>CENTROS DE ACOPIO</h2>
      <table>
        <thead>
          <th>PAIS:</th>
          <th id="pais">Seleccione una ubicaci&oacute;n en el mapa</th>
        </thead>
        <tbody>
          <th>N&deg; de acopio:</th>
          <td id="numeroAcopio"></td>
        </tbody>
      </table>
      <h1>EMICION DE CO2</h1>
      <img src="images/emisionesco2.jfif" alt="emisionesco2" style="width: 100%;">
    </div>
    </div>
  
  <script>

    document.addEventListener('DOMContentLoaded', function() {
      Swal.fire({
        title: 'Welcome!',
        text: 'Select any country on the map to show information about collection centers and their recycling collection rate.',
        icon: 'info',
        confirmButtonText: 'OK'
      });
    });

    var map = L.map('map').setView([0, 0], 2);
    var mipais = null;

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 18,
      attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    fetch('https://worldview.earthdata.nasa.gov/?v=-159.58588685970503,-63.85874712756972,30.489265753919085,29.693867049448393&l=Reference_Labels_15m(hidden),Reference_Features_15m(hidden),Coastlines_15m,VIIRS_SNPP_DayNightBand_ENCC,VIIRS_Black_Marble,VIIRS_SNPP_CorrectedReflectance_TrueColor(hidden),MODIS_Aqua_CorrectedReflectance_TrueColor(hidden),MODIS_Terra_CorrectedReflectance_TrueColor(hidden)&lg=false&t=2024-09-08-T00%3A00%3A00Z')
      .then(response => response.json())
      .then(data => {
        data.schools.forEach(school => {
          L.marker([school.latitude, school.longitude])
            .addTo(map)
            .bindPopup(`<b>${school.name}</b><br>${school.address}`);
        });
      });

    map.on('click', function(e) {
      var latlng = e.latlng;
      var apiKey = '15e06a5acb0a40eb8a9f77b7dc9e32a5'; // Coloca tu clave API aquí
      var url = `https://api.opencagedata.com/geocode/v1/json?q=${latlng.lat}+${latlng.lng}&key=${apiKey}`;

      fetch(url)
        .then(response => response.json())
        .then(data => {
          var country = data.results[0].components.country;
          document.getElementById('pais').innerText = country;
          mensaje_position(country);
        });
    });

    function mensaje_position(pais) {
        // Generar un número aleatorio entre 100 y 500
        var numCentros = Math.floor(Math.random() * (500 - 100 + 1)) + 100;

        // Actualizar el contenido del td con el número de centros
        document.getElementById('numeroAcopio').innerText = numCentros;

        Swal.fire({
            title: pais,
            text: `The selected location has ${numCentros} collection centers. See the chart for more details.`,
            imageUrl: "images/mapaperu.jfif",
            imageWidth: 400,
            imageHeight: 200,
            imageAlt: "Custom image"
        });
    }

  </script>
</body>
</html>