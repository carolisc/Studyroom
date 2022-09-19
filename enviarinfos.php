<?php

    include_once 'includes/dbh.php';

    $materia = $_POST['materia'];
    $trab = $_POST['trab'];
    $prova = $_POST['prova'];

    $sql = "INSERT INTO infos (materia, trab, prova) VALUES ('$materia', '$trab', '$prova');";
    mysqli_query($conn, $sql);

    header("Location: /studyroom/Site/index.php?enviar=success");

?>