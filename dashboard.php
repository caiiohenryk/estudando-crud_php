<?php
session_start();
if(empty($_SESSION)) {
    print "<script>location.href='index.php'</script>";
}
?>

<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <title>Sistema de Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/style.css">
</head>
<body>
    <nav class="navbar navbar-light">
        <div class="container-fluid">
            <a href="" class="navbar-brand">Sistema de Login</a>
            <?php
                print "Olá, ".$_SESSION["nome"];
                print "<a href='logout.php' class='btn btn-danger'>Sair</a>";
            ?>
        </div>
    </nav>
</body>
</html>