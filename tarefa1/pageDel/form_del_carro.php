<!DOCTYPE html>
<html>
    <head>
        <title>Tarefa 1</title>
        <link rel="stylesheet" type="text/css" href="../pageEstilo/estilo.css">
    </head>
    <body>

        <h1 class="">Excluir Carro</h1>
        <button id="myBtn" class="btnVoltar">Voltar</button><br><br>
        <script>
            var btn = document.getElementById('myBtn');
            btn.addEventListener('click', function() {
            document.location.href = '../index.php';
            });
        </script>
        <form method="POST" action="delcarro.php">
            <label for="id" >ID do carro:</label>
                <input type="text" id="id" required="required" name="id" class="input"><br><br>
                <input type="submit" value="Deletar" class="input" >
        </form>
          
    </body>
</html>