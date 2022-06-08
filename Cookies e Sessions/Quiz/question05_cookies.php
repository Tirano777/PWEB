<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pergunta 5</title>
</head>
<body>
    <?php
        setcookie("question4", $_POST["question4"]);
    ?>
    <section id="main-quiz">
        <h2 class="main-title">Pergunta 5</h2>
        <h3 class="main-title -change">Quem é o atual rei, em Porto Real?</h3>
        <form action="answers_cookies.php" method="post" onsubmit="return validaForm()">
            <input type="radio" name="question5" value="jonsnow">Jon Snow<br>
            <input type="radio" name="question5" value="aegon">Aegon VI<br>
            <input type="radio" name="question5" value="tommem">Tommem I<br>
            <input type="radio" name="question5" value="jofrey">Jofrey I<br>
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <br>
        <img src="img/imagem5.jpg" alt="tom jobim"  width="384" height="216">
    </section>
<script>
    function validaForm(){
        var radios = document.getElementsByName("question5");
        var formValido = false;

        var i = 0;
        while (!formValido && i < radios.length) {
            if(radios[i].checked) formValido = true;
            i++;        
        }

        if (!formValido) alert("Escolha uma alternativa");
        return formValido;
    }
</script>
</body>
</html>