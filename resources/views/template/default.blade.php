<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de cria</title>

    <link rel="stylesheet" href="{{url('css/style.css')}}">
     <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    

</head>
<body>
    <header class="home">
    <div class="main">
            <div class="logo">
                <img src="../images/logo2.webp">
            </div>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/contato">Contato</a></li>
                <li><a href="/pedido">Pedido</a></li>
                <li><a href="/produto">Produto</a></li>
                <li><a href="/categoria">Categoria</a></li>
                <li><a href="/cliente">Cliente</a></li>
            </ul>
     
        </div>
        </div>
        
    </header>

    <footer>
        <div >
    <p class="rodape">Todos direitos reservados Marcus, Diego e Diegão - 2022
      </p>
</div>

    </footer>

    @yield('content')


    </footer>

</body>


</html>
