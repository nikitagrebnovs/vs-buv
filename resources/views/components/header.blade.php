<body class="">
<div class="container-fluid bg-vs-dark row-cols-2" >
<div class=" text-dark col ms-auto" id="header-contacts">
        <div class="row">
            <div class="col row ms-2">
                <i class="fas fa-phone-alt col-1 my-auto"></i>
                <p class="col-2 my-auto ms-0">22482946</p>
            </div>
            <div class="col col-sm row" id="mobile-number">
                <i class="fas fa-phone-alt col-1 my-auto"></i>
                <p class="col-2 my-auto ms-0">22482946</p>

            </div>
            <div class="col col-sm row" id="mobile-number">
                <i class="far fa-envelope col-1 my-auto"></i>
                <p class="col my-auto ms-0">info@vs-buvgrupa.lv</p>

            </div>
            <div class="col row" id="header-question">
                <i class="fas fa-angle-double-right col-1 my-auto"></i>
                <a class="col my-auto ms-0 text-dark" href="">Задать вопрос</a>
            </div>
        </div>

        </div>

</div>

<nav class="container-fluid navbar navbar-expand-lg navbar-dark bg-vs-dark" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container collapse navbar-collapse nav nav-pills ">
        <img src="{{ asset('assets/img/loge-new.png') }}" alt="Logo" class="logo">
        <ul class="container navbar-nav header-text justify-content-around row-cols-auto"  id="navbarNav">

            <li class="nav-item menu-item-left my-auto col">
                <a class=" {{ Route::is('/') ? 'navi' : '' }} current" href="{{ route('home') }}">Главная</a>
            </li>
            <li class="nav-item menu-item-left my-auto col">
                <a class="{{ Route::is('works') ? 'navi' : '' }} current" href="{{ route('works') }}">Работы</a>
            </li>
            <li class="nav-item menu-item-left my-auto col">
                <a class="{{ Route::is('offers') ? 'navi' : '' }} current" href="{{ route('offers') }}">Услуги</a>
            </li>
            <li class="nav-item menu-item-left my-auto col">
                <a class="{{ Route::is('montage') ? 'navi' : '' }} current" href="{{ route('montage') }}">Монтаж</a>
            </li>
            <li class="nav-item menu-item-left my-auto col">
                <a class="{{ Route::is('about-us') ? 'navi' : '' }} current" href="{{ route('about-us') }}">О НАС</a>
            </li>
            <li class="nav-item menu-item-last my-auto col">
                <a class="{{ Route::is('contacts') ? 'navi' : '' }} current" href="{{ route('contacts') }}">Контакты</a>
            </li>
        </ul>
    </div>
</nav>
</body>
