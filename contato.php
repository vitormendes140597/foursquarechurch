<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Contato</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
  <?php include_once 'contents/floating-menu.php'; ?>
  <?php include_once 'contents/menu-responsive.php'; ?>
    <!-- Conteudo Teste -->

    <section class="main-content">
   	  <div class="col-md-5 contact">
        <form class="contact-form">
          <h2 class="form-title">Envie-nos uma mensagem!</h2>
          <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 input-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Ex: Vitor Henrique Mendes">
          </div>
          <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 input-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Ex : exemplo@hotmail.com">
          </div>
          <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 input-group">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" class="form-control">
          </div>
          <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 input-group">
            <textarea class="form-control" name="texto" cols="10" rows="10"></textarea>
          </div>
          <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2 input-group">
            <button class="btn btn-primary" type="submit">Enviar</button>
          </div>
        </form>
      </div>
      <div class="col-md-6 maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.9732193664527!2d-46.18736328447939!3d-23.497474084714593!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cdd78e7547b85b%3A0xa6410414aec53c7e!2sR.+M%C3%A9m+de+S%C3%A1%2C+80+-+Jardim+Marica%2C+Mogi+das+Cruzes+-+SP%2C+08775-430!5e0!3m2!1spt-BR!2sbr!4v1506622010966" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </section>
    <?php include_once 'contents/footer.php'; ?>
</body>
</html>