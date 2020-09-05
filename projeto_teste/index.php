<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF8" />
    <title>Página de teste</title>
    <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Dancing+Script:wght@562&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="formlabel.css" />
</head>

<body>
    <header> 
        <h1>Página de teste</h1>
        <p>Subtítulo</p>
    </header>
    <nav>
        <h2>Área de Cadastro</h2>
        <form action="login.html" method="GET">

            <label> Nome Completo:<br/>
                <input type="text" name="nome" />
            </label>

            <label>
                Descrição:<br/>
                <textarea name="descricao"></textarea>
            </label>
                
            <label>
                Categoria:<br/>
                <select name="categoria">
                    <option value="1">Categoria 1</option>
                    <option value="2">Categoria 2</option>
                    <option value="3">Categoria 3</option>
                    <option value="4">Categoria 4</option>
                    <option value="5">Categoria 5</option>
                </select>
            </label>                           
                
            <label>
                <input type="checkbox" />
                Eu declaro que li e aceito os <a href="termo.html" target="_blank" class="termoslink">termos de uso</a>
            </label>             

            <button>Fazer Cadastro</button>
    
        </form>    
    </nav>

    <footer>  
        Created by RogerioPelizari ago-2020    
    </footer>
</body>

</html>