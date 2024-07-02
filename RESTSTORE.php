<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REST STORE</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <section class="logo-ctn">
            <img src="./files/logo.jpg.png" width="150px" height="150px">
        </section>
        <section class="nav-head">
        <input type="text" placeholder="Pesquisar..." id="SearchId">
        </section>
    </header>
    <main>
        <nav>
            <section class="nav-ctn">
                <ul>
                    <li><a href="#1">PRODUTOS</a></li>
                    <li><a href="#1">SHAPES</a></li>
                    <li><a href="#1">ACESSÓRIOS</a></li>
                </ul>
            </section>
        </nav>
        <img src="./files/imgprincipal.jpg.jpg" class="ctn-head">
        <section class="prod-tranding">
            <section id="prod1">
                <img src="./files/shapeChild.webp">
                <h1> Shape Child</h1>
                <p>R$ 159,00</p>
                <button class="button-23" role="button">Comprar</button>
            </section>
            <section id="prod2">
                <img src="./files/shapeChild.webp">
                <h1> Shape Child</h1>
                <p>R$ 159,00</p>
                <button class="button-23" role="button">Comprar</button>
            </section>
            <section id="prod3">
                <img src="./files/shapeChild.webp">
                <h1> Shape Child</h1>
                <p>R$ 159,00</p>
                <button class="button-23" role="button">Comprar</button>
            </section>
            <section id="prod4">
                <img src="./files/shapeChild.webp">
                <h1> Shape Child</h1>
                <p>R$ 159,00</p>
                <button class="button-23" role="button">Comprar</button>
            </section>
        </section>
    </main>
    <footer>
        <section class="ctn-footer">
            <section class="faqRest">
                <h1>Quem Somos?</h1>
                <p>Loja focada na cultura do HipHop.
                    Tentamos trazer o melhor parar o cliente sempre!
                    Desde de 2023</p>
            </section>
            <section class="formRest">
                <h1>Fale Conosco</h1>
                <form>
                    <label for="fname">E-mail:</label><br>
                    <input type="text" class="email" name="email"><br>
                    <label for="lname">Senha:</label><br>
                    <input type="text" class="senha" name="senha">
                  </form> 
                  <input type="submit" value="Enviar" id="btn-submit">
            </section>
        </section>
    </footer>
</body>
</html>
