<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pergunta 4</title>
</head>
<body>
    <?php
        setcookie("question3", $_POST["question3"]);
    ?>
    <section class="main-quiz">
        <h2 class="main-title">Pergunta 4</h2>
        <h3 class="main-title -change">Em que ano aconteceu o Torneio de Harrenhal?</h3>
        <form action="question05_cookies.php" method="post" onsubmit="return validaForm()">
            <input type="radio" name="question4" value="281">281 d.C<br>
            <input type="radio" name="question4" value="282">282 d.C<br>
            <input type="radio" name="question4" value="283">283 d.C<br>
            <input type="radio" name="question4" value="284">284 d.C<br>
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <br>
        <img src="img/imagem4.jpg"  width="384" height="216">
    </section>
<script>
    function validaForm(){
        var radios = document.getElementsByName("question4");
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