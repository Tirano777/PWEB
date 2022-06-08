<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css.css">
    <title>Respostas</title>
</head>
<body>
    <?php
        setcookie("question5", $_POST["question5"]);
        $rightQuestions = 0;

        if($_COOKIE["question1"] == "1948js"){
            $rightQuestions++;
            $result01 = "Acertou";
        } else {
            $result01 = "Errou";
        }
        if($_COOKIE["question2"] == "298py"){
            $rightQuestions++;
            $result02 = "Acertou";
        } else {
            $result02 = "Errou";
        }
        if($_COOKIE["question3"] == "2011"){
            $rightQuestions++;
            $result03 = "Acertou";
        } else {
            $result03 = "Errou";
        }
        if($_COOKIE["question4"] == "281"){
            $rightQuestions++;
            $result04 = "Acertou";
        } else {
            $result04 = "Errou";
        }
        if($_COOKIE["question5"] == "tommem"){
            $rightQuestions++;
            $result05 = "Acertou";
        } else {
            $result05 = "Errou";
        }


        if($rightQuestions == 0){
            $finalizacao = "<h1>Você errou todas! Não é um verdadeiro fã! :( </h1>";
        } elseif($rightQuestions == 1){
            $finalizacao = "<h1>Vejo que está começando a trilhar este caminho! Não desista! :/</h1>";
        } elseif($rightQuestions == 2){
            $finalizacao = "<h1>Vejo que está começando a trilhar este caminho! Não desista! :)</h1>";
        } elseif($rightQuestions == 3){
            $finalizacao = "<h1>Ok! Você é um fã! :D</h1>";
        } elseif($rightQuestions == 4){
            $finalizacao = "<h1>Um fã de verdade, que têm conhecimento do cenário e sabe, mesmo, das coisas! :p</h1>";
        } else {
            $finalizacao = "<h1>Que tal ajudar o Martin a escrever os últimso dois livros? Sabe tudo! :DD</h1>";
        }

        $nota = "<h2>Sua nota: ".$rightQuestions."/5</h2>";
    ?>
    <section class="main-section">
        <h1>Se quiser, pode refazer!</h1>
        <ul>
            <li id="selec"><a href="index.html">Cookies</a></li>
            <li><a href="indexsessions.html">Sessions</a></li>
        </ul>
    </section>

</body>
</html>