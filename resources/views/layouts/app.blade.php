<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/29e6b87f45.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
        <header id="header" role="banner" class="main-header">
                <div class="header-inner">
             
                    <div class="header-logo">
                        <a href="#"><img src="img/logo.png" alt="Logo" width="60" height="50"></a>
                    </div>
             
                    <nav class="header-nav">
                        <ul>
                            <li><a href="#">Accueil</a></li>
                            <li><a href="#">L'équipe</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Médiathèques</a></li>
                            <li><a href="#">Je participe</a></li>
                            <li class="header-logo">
                                    <a href="#" ><img src="img/loupe.png" alt="Logo" width="30" height="25"></a>
                               </li>
                        </ul>
                       
                    </nav>
             
                </div>
            </header>
    @yield('content')


    <div class="footer">
            <p class="text-center pt-3"><a href=""><i class="fab fa-facebook fa-lg m-1"></i></a><a href=""><i class="fab fa-twitter fa-lg m-1"></i></a></p>
        <hr>
        <h3 class="text-center">Les partenaires</h3>
      
        <div class="row pb-2">
          <div class="col-lg-3 col-md-6 col-sm-12 "><p class="text-center"><img src="https://via.placeholder.com/150" alt=""></p></div>
          <div class="col-lg-3 col-md-6 col-sm-12"><p class="text-center"><img src="https://via.placeholder.com/150" alt=""></p></div>
          <div class="col-lg-3 col-md-6 col-sm-12"><p class="text-center"><img src="https://via.placeholder.com/150" alt=""></p></div>
          <div class="col-lg-3 col-md-6 col-sm-12"><p class="text-center"><img src="https://via.placeholder.com/150" alt=""></p></div>
        </div>

        <h3 class="text-center">Newsletter</h3>
        <form>
            <div class="form-group">
              <div class="row justify-content-center">
              <p class="text-center"><input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com"></p>
              <p class="text-center pl-1"><input type="submit" class="btn btn-primary" value="S'inscrire"></p>
              </div>
            </div>
        </form>
    </div>


    <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>