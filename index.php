<?php
    include_once 'includes/dbh.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>studyroom</title>
    <link rel="home stylesheet" href="style.css">
    <script type = "text/javascript" src="home.js"></script> 

</head>
    
<body>

    <div class="cabecalho">
            <h1 class="first-txt">Sala de Estudos <br>da Carol
            </h1>
        
    </div>
    
    <h2 class="materias">Matérias</h2>

    <div id="retang1">
        <form action="enviarinfos.php" method="POST">
            <div> <input type="text" name="materia" value="Matéria">
                <br> </div>
            <div> <input type="text" name="trab" value="Trabalho">
                <br></div>
            <div> <input type="text" name="prova" value="Prova">
                <br></div>
            <div> <button type="submit" name="submit">Enviar</button>
                </div>
            <!-- <input type="submit" value="Submit" onclick="addMateria()"> 
            <p id="demo"></p> -->
        </form>
    
    </div>

<?php

    $sql = "SELECT * FROM infos;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row['materia'], "<div style='bottom:2px;' </div> <br>";
            echo $row['trab'], "<br>";
            echo $row['prova'], "<br>";
        }
    }

?>

    <div id="retang2"></div>
    <div id="retang3"></div>
    <div id="retang4"></div>

</script> 

</body>


</html>