<html>
<body>
    <h1>Notícias</h1>
    <ul>
    <?php foreach ($data['news'] as $new) {?>
    <li><a href="./noticias/<?php echo $new['Id']; ?>"><?php echo $new['titulo'] ?></a></li>
    <?php }?>
    </ul>
    <form method="POST">
        <input type="text" name="nome">
        <input type="submit" value="Cadastrar">
    </form>
</body>
</html>
