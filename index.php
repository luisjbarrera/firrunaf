<!DOCTYPE html>
<html>
<head>
    <title>My Recycled Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        background-color: #f4f4f4;
    }
    h2 {
        color: #333;
    }
    form {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }
    form label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
    }
    form input[type="text"],
    form input[type="number"] {
        width: 100%;
        padding: 8px;
        margin-bottom: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    form input[type="submit"] {
        background-color: #28a745;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    form input[type="submit"]:hover {
        background-color: #218838;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table, th, td {
        border: 1px solid #ddd;
    }
    th, td {
        padding: 12px;
        text-align: left;
    }
    th {
        background-color: #f2f2f2;
        font-weight: bold;
    }
    td {
        background-color: #fff;
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



            
    </style>
</head>
<body>
    <div class="navbar">
        <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> 
        <a href="contribuciones.php"><i class="fa fa-fw fa-bar-chart-o"></i> My contribution</a>
        <a href="imagenes-descargadas.php"><i class="fa fa-fw fa-map-marker"></i> Map of collection centers</a>
        <a href="canjes.php"><i class="fa fa-fw fa-map-marker"></i> Redeem your points</a>
    </div>


    <div class="row">
        <div id="sidebar">
            <h2><i class="fas fa-recycle"></i> My Recycled Products List</h2>
            <?php
            // Array de entregas
            $entregas = [
                ["producto" => "Paper", "cantidad" => "10kg white paper", "local" => "Coafee Central", "puntos" => "8"],
                ["producto" => "Plastic", "cantidad" => "3kg PET bottles", "local" => "School San Francisco", "puntos" => "3"],
                ["producto" => "Plastic", "cantidad" => "5kg PET bottles", "local" => "Municipality", "puntos" => "5"],
                ["producto" => "Organic", "cantidad" => "8kg coffee waste", "local" => "School sorting and collection center", "puntos" => "16"],
                ["producto" => "+ Additional Points", "cantidad" => "Friend invitation", "local" => "Additional points earned", "puntos" => "2"]

            ];

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nuevo_producto = $_POST['producto'];
                $nueva_cantidad = $_POST['cantidad'];
                $nuevo_local = $_POST['local'];

                $nueva_entrega = ["producto" => $nuevo_producto, "cantidad" => $nueva_cantidad, "local" => $nuevo_local, "puntos" => "0"];
                array_push($entregas, $nueva_entrega);
            }

            if (!empty($entregas)) {
                echo "<h2><i class='fas fa-list'></i> List of deliveries</h2>";
                echo "<table>";
                echo "<thead><tr><th>Products</th><th>Quantity (kg)</th><th>Site</th><th>+ Points <span class='w3-badge w3-blue'>34</span> </th></tr></thead>";
                echo "<tbody>";
                foreach ($entregas as $entrega) {
                    echo "<tr>";
                    echo "<td>".$entrega['producto']."</td>";
                    echo "<td>".$entrega['cantidad']."</td>";
                    echo "<td>".$entrega['local']."</td>";
                    echo "<td><p><span class='w3-badge w3-green'>".$entrega['puntos']."</span> Pts</p></td>";
                    echo "</tr>";
                }
                echo "</tbody>";
                echo "</table>";
            }

            // Datos para el gráfico
            $productos = array_column($entregas, 'producto');
            $puntos = array_column($entregas, 'puntos');
            ?>
        </div>

        <!-- <div id="migrafico">
                <h2>Mi meta</h2>
                <div id="imageContainer">Estas a punto de llegar a una meta mensual, vamos tu puedes.!!!</div>
                
                <h2>My contributions in figures</h2>
                <canvas id="myChart" ></canvas>
        </div> -->
        
        
    </div>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: <?php echo json_encode($productos); ?>,
                datasets: [{
                    label: 'Cumulative points graph',
                    data: <?php echo json_encode($puntos); ?>,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });



            // Crea un elemento de imagen
        var img = document.createElement("img");
        img.src = "images/studnet_recycle.jfif"; // Ruta de la imagen
        img.alt = "Student Recycle";
        img.style.width = "200px"; // Ajusta el tamaño según tus necesidades

        // Añade la imagen al contenedor deseado
        document.getElementById("imageContainer").appendChild(img);

    </script>


</body>
</html>
