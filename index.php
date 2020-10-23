<!DOCTYPE HTML>
<html lang="pt-br">  
    <head>  
        <meta charset="utf-8">
        <title>Adicionar Campo</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
            .form-group{
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <h1>Adicionar Campo</h1>
        <form action="recebe.php" method="post">
            <div id="formulario">
                <div class="form-group">
                    <label>Aula: </label>
                    <input type="text" name="titulo" placeholder="Nome Qualquer">
                    <button type="button" id="add-campo"> + </button>
                </div>
            </div>
            <div class="form-group">
                <input type="submit" value="Cadastrar">
            </div>
        </form>

        <script>
            //https://api.jquery.com/click/
            $("#add-campo").click(function () {
				//https://api.jquery.com/append/
                $("#formulario").append('<div class="form-group"><label>Nome Qaulquer: </label> <input type="text" name="titulo[]" placeholder="Nome Qualquer"></div>');
            });
        </script>
    </body>
</html>