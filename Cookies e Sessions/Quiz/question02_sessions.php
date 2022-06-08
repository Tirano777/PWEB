<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pergunta 2</title>
</head>
<body>
    <?php
        session_start();
        $_SESSION["question1"] = $_POST["question1"];
    ?>
    <section class="main-quiz">
        <h2 class="main-title">Pergunta 2</h2>
        <h3 class="main-title -change">Em que ano, cronologicamente, a história do primeiro livro se inicia?</h3>
        <form action="question03_cookies.php" method="post" onsubmit="return validaForm()">
            <input type="radio" name="question2" value="297py">297 d.C<br>
            <input type="radio" name="question2" value="298py">298 d.C<br>
            <input type="radio" name="question2" value="299py">299 d.C<br>
            <input type="radio" name="question2" value="300py">300 d.C<br>
            <br>
            <input type="submit" name="enviar" value="Enviar">
        </form>
        <br>
        <img src="img/imagem2.jpg"  width="384" height="216">
    </section>
<script>
    function validaForm(){
        var radios = document.getElementsByName("question2");
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