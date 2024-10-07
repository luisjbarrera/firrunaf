<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
body {
  font-family: Arial;
}

.coupon {
  border: 5px dotted #bbb;
  width: 80%;
  border-radius: 15px;
  margin: 0 auto;
  max-width: 600px;
}

.container {
  padding: 2px 16px;
  background-color: #f1f1f1;
}

.promo {
  background: #ccc;
  padding: 3px;
}

.expire {
  color: red;
}



    .row {
        display: flex;
        flex-wrap: wrap;
    }
    #migrafico {
        width: 100%;
        max-width: 600px;
        margin-right: 40px; /* Aumenta el margen derecho */
    }
    #sidebar {
        flex-grow: 1;
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
        <a href="imagenes-descargadas.php"><i class="fa fa-fw fa-map-marker"></i> Map of collection centers</a>
        <a class="active" href="canjes.php"><i class="fa fa-fw fa-map-marker"></i> Redeem your points</a>
    </div>

        <div>
            <img src="images/puntos_ganados.jpg" style="width: 10%;" alt="puntos_ganados">
        </div>
    <div class="row">
        <div class="coupon">
            <div class="container">
                <h3>Redeem your points</h3>
            </div>
            <img src="images/reloj.jfif" alt="Avatar" style="width:100%;">
            <div class="container" style="background-color:white">
                <h2><b>1800 points you can redeem</b></h2> 
                <p>If you have accumulated 2000 points you can redeem this men's watch..</p>
            </div>
            <div class="container">
                <p>Use Code: <span class="promo">BOH232</span></p>
                <p class="expire">Expires: Oct 23, 2024</p>
            </div>
        </div>

        <div class="coupon">
            <div class="container">
                <h3>Redeem your points</h3>
            </div>
            <img src="images/calzado.jfif" alt="Avatar" style="width:100%;">
            <div class="container" style="background-color:white">
                <h2><b>1800 points you can redeem</b></h2> 
                <p>If you have accumulated 2000 points you can redeem this pair of men's shoes in treated cowhide.</p>
            </div>
            <div class="container">
                <p>Use Code: <span class="promo">BOH272</span></p>
                <p class="expire">Expires: Nov 13, 2024</p>
            </div>
        </div>

        <div class="coupon">
            <div class="container">
                <h3>Redeem your points</h3>
            </div>
            <img src="images/traje.jfif" alt="Avatar" style="width:100%;">
            <div class="container" style="background-color:white">
                <h2><b>6000 points you can redeem</b></h2> 
                <p>If you managed to accumulate 6000 points you can redeem this women's fur coat.</p>
            </div>
            <div class="container">
                <p>Use Code: <span class="promo">BOH252</span></p>
                <p class="expire">Expires: Nov 03, 2024</p>
            </div>
        </div>

        <div class="coupon">
            <div class="container">
                <h3>Redeem your points</h3>
            </div>
            <img src="images/traje2.jfif" alt="Avatar" style="width:100%;">
            <div class="container" style="background-color:white">
                <h2><b>6100 points you can redeem</b></h2> 
                <p>If you managed to accumulate 6100 points you can redeem this original colored fur coat for women.</p>
            </div>
            <div class="container">
                <p>Use Code: <span class="promo">BOH162</span></p>
                <p class="expire">Expires: Nov 16, 2024</p>
            </div>
        </div>
    </div>
</body>
</html> 