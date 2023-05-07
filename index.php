<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Century Gothic', sans-serif;
}
.hero{
    width: 100%;
    height: 100vh;
    background:linear-gradient(black);
    position: relative;
    padding: 0 5%;
    display: flex;
    align-items: center;
    justify-content: left;
}
nav{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 40px 100px;
    display: flex;
    align-items: center;
    justify-content: space-between;
}
nav .logo{
    position: relative;
    max-width: 180px;
}
nav ul{
    position: relative;
    display: flex;
}
nav li {
    list-style: none;
}
nav li a{
    color: violet;
    display: inline-block;
    text-decoration: none;
    font-weight: 100;
    font-size: 19px;
    margin-left: 100px;
}
.content{
    text-align: center;
}
.content h1{
    font-size: 150px;
    color: violet;
    font-weight: 600;
}
.content h2{
    font-size: 20px;
    color: white;
    font-weight: 600;
}
.content h3{
    font-size: 20px;
    color: white;
    font-weight: 600;
}
.content a {
    text-decoration: none;
    display: inline-block;
    color: white;
    font-size: 24px;
    border: 2px solid white;
    padding: 10px 70px;
    border-radius: 50px;
    border-color: violet;
    margin-top: 20px;
    text-align: center;
}
.back-video{
    position: absolute;
    right: 0;
    bottom: 0;
    z-index: -1;
    width: 100%;
    height: 100%;
    object-fit: cover;
    box-shadow: 0 0 0 100px violet;
}
@media screen and (max-width: 1920px) {
    .content{
    text-align: center;
}
.content h1{
    font-size: 100px;
    color: violet;
    font-weight: 600;
}
.content h2{
    font-size: 15px;
    color: white;
    font-weight: 600;
}
.content h3{
    font-size: 20px;
    color: white;
    font-weight: 600;
}
.content a {
    text-decoration: none;
    display: inline-block;
    color: white;
    font-size: 24px;
    border: 2px solid white;
    padding: 10px 70px;
    border-radius: 50px;
    border-color: violet;
    margin-top: 20px;
    text-align: center;
}   
}
</style>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" href="img/short_logo.png" type="image">
    <title>HOC TV</title>
</head>
<body>
    <div class="hero">
        <video autoplay loop muted plays-inline class="back-video">
            <source src="video/vikings.mp4" type="video/mp4">
        </video>
        <nav>
            <img src="img/logo.png" class="logo">
            <ul>
                <li><a href="filmes.php">Filmes</a></li>
                <li><a href="series.php">Séries</a></li>

                <?php
                
                if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
                    // Se o usuário está logado, exibe o botão de sair
                    echo '<li><a href="logout.php">Sair</a></li>';
                } else {
                    // Se o usuário não está logado, exibe o botão de entrar/registrar
                    echo '<li><a href="login.php">Entrar/Registar</a></li>';
                }
                ?>
            </ul>
        </nav>
        <div class="content">
            <h1>HOC TV</h1>
            <h2>A grande casa do entretenimento chegou clica no botão abaixo para começar</h2>
            <a href="filmes.php">Explorar</a>
        </div>
    </div>
</body>
</html>
