<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> {{ config('app.name') }} :  @yield('title') </title>
    <link rel="stylesheet" href=" {{ asset('css/bootstrap.css') }}">
</head>
<body id="page-top">

        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3">
            <div class="container">
                <a class="navbar-brand" href="{{ route('etudiant.index') }}">Maisonneuve2194804</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{ route('etudiant.index') }}">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">À propos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="py-5 bg-image-full" style="background-image: linear-gradient(#3e5151, #decba4)">
            <h1 class="display-one my-5 text-center text-white display-3">
                Bienvenue sur Notre Site {{ config('app.name') }}
            </h1>
        </div>

    @yield('content') 


    <footer class="py-3 bg-dark mt-4">
            <div class="container">
                <div class="row align-items-center text-white">
                    <div class="col-lg-4 text-lg-start ">Copyright &copy; Maisonneuve2194804 2023</div>

                    <div class="col-lg-8 text-lg-end">
                        <a class="text-decoration-none me-3 text-white" href="#!">Politique de confidentialité</a>
                        <a class="text-decoration-none text-white" href="#!">Conditions d'utilisation</a>
                    </div>
                </div>
            </div>
    </footer>

</body>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>

</html>