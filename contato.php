<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portal da prefeitura de Santa Mônica - AL">
    <meta name="author" content="Álvaro Ascenço">

    <title>Prefeitura de Santa Mônica</title>

    <link rel="canonical" href="index.html">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/form.css">
  </head>
  <body>
    <div class="container">
      <header>
        <div id="header" class="py-3 px-3 d-flex justify-content-between align-items-center">
          <div class="col-8 pt-1">
            <a id="header--title" href="#">Santa Mônica</a><br>
            <p class="lead">O oasis do agreste</p>
          </div>
          <div class="col-4 text-end">
            <img src="img/bandeira.jfif" id="header--img" alt="Bandeira de Santa Mônica">
          </div>
        </div>
      </header>
    
      <div class="nav-scroller py-1 mb-2">
        <nav class="nav d-flex justify-content-around">
          <a class="p-2 link-success" href="index.html" accesskey="1">Página Principal</a>
          <a class="p-2 link-success" href="historia.html" accesskey="2">História</a>
          <a class="p-2 link-success" href="turismo.html" accesskey="3">Turismo</a>
          <a class="p-2 link-success" href="#" accesskey="4">Entre em contato</a>
        </nav>
      </div>
    </div>

    <main class="container">
      <article class="col-12">  
        <h2 id="formulario">Formulário de Contato</h2>
        <form action="#" method="post">
          <div class="form-group row mx-1">
            <label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Nome*</label>
            <input type="text" class="form-control col-12 col-sm-10 form-control-sm" id="nome" placeholder="Digite seu nome">
          </div>
          <div class="form-group row mx-1" id="validName">
            <span class="col-sm-2">&nbsp;</span>
            <span class="obligatory--warnings obligatory--errorText">Campo nome obrigatório.</span>
          </div>
          <div class="form-group row mx-1">
            <label for="email" class="col-sm-2 col-form-label col-form-label-sm">E-mail*</label>
            <input type="email" class="form-control col-12 col-sm-10 form-control-sm" id="email" placeholder="Digite seu email">
          </div>
          <div class="form-group row mx-1" id="validEmail">
            <span class="col-sm-2">&nbsp;</span>
            <span class="obligatory--warnings obligatory--errorText">E-mail válido obrigatório.</span>
          </div>
          <div class="form-group row mx-1" id="fg--mensagem">
            <label for="mensagem" class="col-sm-2 col-form-label col-form-label-sm">Mensagem*</label>
            <textarea class="form-control col-12 col-sm-10 form-control-sm" id="mensagemField"></textarea>
          </div>            
          <div class="form-group row mx-1" id="validMensagem">
            <span class="col-sm-2">&nbsp;</span>
            <span class="obligatory--warnings obligatory--errorText">Campo mensagem obrigatório.</span>
          </div>
          <div class="form-group row mx-1">
            <div class="col-12" id="divSubmit">
              <button type="submit" class="btn  btn-primary mb-4" onClick="validateInputs(event)" id="sendButton">Enviar</button>   
            </div>
          </div>
          <div class="form-group row ">
            <div class="col-12">
              <span class="obligatory--warnings">* Campos obrigatórios.</span>
            </div>
          </div>
        </form>
      </article>
    </main>

    <footer class="container d-flex justify-content-center">
      <p>Feito por: 
        <a target="_blank" href="https://github.com/alvaroascenco">Álvaro Ascenço</a>  
      </p>
    </footer>
    <script src="scripts/formValid.js"></script>
  </body>
</html>
