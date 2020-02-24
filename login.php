<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name ="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X.UA-Compatible" content="ie=edge">
    <title>
        login con sesion
    </title>

</head>
<body >
<header>

</header>
<link rel=stylesheet href=css/estilos.css>


<center>


    <form action="logica/loguear.php" method="POST">

        <div class="div1">


           <img src="imagenes/user1.png" width="100" height="120">
            <br><br>
            <label> Usuario: </label><br><br>
        <input type="text" name="usuario" placeholder="Ingrese usuario">
        <br><br>
            <label>Contraseña: </label><br><br>

        <input type="password" name="contraseña" placeholder="Ingrese contraseña">
        <br><br>
        <button type="submit"> Ingresar </button>

        </div>


    </form>

</center>




</body>




</html>
