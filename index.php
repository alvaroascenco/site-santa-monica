<!doctype html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portal da prefeitura de Santa Mônica - AL">
    <meta name="author" content="Álvaro Ascenço">

    <title>Prefeitura de Santa Mônica</title>

    <link rel="canonical" href="index.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/index.css">
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
          <a class="p-2 link-success" href="#" accesskey="1">Página Principal</a>
          <a class="p-2 link-success" href="historia.php" accesskey="2">História</a>
          <a class="p-2 link-success" href="turismo.php" accesskey="3">Turismo</a>
          <a class="p-2 link-success" href="contato.php" accesskey="4">Entre em contato</a>
        </nav>
      </div>
    </div>

    <main class="container">
      <section>
        <div class="d-flex justify-content-center">
          <h3>Notícias</h3>  
        </div>

        <div class="card my-3">
          <div class="card-header" id="todayNews">
            <!-- DATE WILL BE INSERTED HERE -->
          </div>
          <article class="card-body">
            <h5 class="card-title">Município decreta estado de emergência devido aos recorrentes desaparecimentos.</h5>
            <p class="card-text">Prefeito pede auxílio a polícia federal para auxiliar na investigação dos sumiços inexplicáveis.</p>
            <div class="collapse news" id="collapseNews">
              <p>
                Desde junho do último ano vários desaparecimentos foram notificados às autoridades da cidade, mas nenhum caso ainda foi solucionado.
                A população amedrontada e injustiçada demanda que os culpados sejam encontrados e julgados.
              </p>
              <div>
                Em uma entrevista com o o jornal local, o chefe do corpo policial da cidade pede paciência aos habitantes transtornados e desabafa:
                <figure>
                  <blockquote class="bg-light bg-gradient">
                    São muito peculiares todos esses desaparecimentos, [...] o calibre da investigação que precisa ser conduzido é maior do que imaginamos [...]
                  </blockquote>
                  <figcaption>-Sgt. Carvalho da Polícia Militar - AL</figcaption>
                </figure>
              </div>
            </div>
            <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseNews" role="button" aria-expanded="false" aria-controls="collapseNews">
              Ler notícia completa
            </a>
          </article>
        </div>
        <div class="card my-3">
          <div class="card-header">
            04/10/2021
          </div>
          <article class="card-body">
            <h5 class="card-title">Nova praça inaugurada no bairro Nova Alvorada.</h5>
            <p class="card-text">Para aproveitar o fim de semana, as crianças da cidade se reuniram em uma gincana promovida pela prefeitura.</p>
            <div class="collapse news" id="collapseNews2">
              <p>
                Neste último sábado (02) foi organizada uma gincana pela prefeitura para promover a nova praça inaugurada no bairro Nova Alvorada, na zona leste do município.
                A prefeitura também disponibilizou bolas, tacos, pipoca e refrigerante para as crianças e para a população em geral para comemorar o dia das crianças que acontece no dia 12 deste mês.
              </p>
            </div>
            <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseNews2" role="button" aria-expanded="false" aria-controls="collapseNews2">
              Ler notícia completa
            </a>
          </article>
        </div>
        <div class="card my-3">
          <div class="card-header">
            15/06/2021
          </div>
          <article class="card-body">
            <h5 class="card-title">Moradora do bairro Jacarepaguá desaparece na manhã de quinta-feira.</h5>
            <p class="card-text">Maria das Graças Garcia, de 35 anos saiu para trabalhar em Olho D'água Das Flores no último dia 10 e não retornou desde então.</p>
            <div class="collapse news" id="collapseNews3">
              <p>
                A mulher saiu de sua casa na para ir ao seu trabalho mas, após 5 dias, ainda não voltou. A polícia está investigando o caso. Os familiares preocupados estão saindo
                pelas cidades vizinhas procurando pistas: <i>"A polícia não faz nada!"</i> disse o irmão de Maria, transtornado com a situação. 
              </p>
            </div>
            <a class="btn btn-success" data-bs-toggle="collapse" href="#collapseNews3" role="button" aria-expanded="false" aria-controls="collapseNews3">
              Ler notícia completa
            </a>
          </article>
        </div>
      </section>
    </main>

    <footer class="container d-flex justify-content-center">
      <p>Feito por: 
        <a target="_blank" href="https://github.com/alvaroascenco">Álvaro Ascenço</a>  
      </p>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="scripts/todayScript.js"></script>
  </body>
</html>
