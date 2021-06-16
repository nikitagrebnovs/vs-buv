<div class="" id="header">

<nav class="container-fluid navbar navbar-expand-lg navbar-dark bg-vs-dark mt-5" id="navbar">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container collapse navbar-collapse nav nav-pills ">

        <img src="{{ asset('assets/img/loge-new.png') }}" alt="Logo" class="logo" id="logo">
        <ul class="container navbar-nav header-text justify-content-around row-cols-auto"  id="navbarNav">
            <li class="nav-item menu-item-left my-auto col">
                <a class="{{ Route::is('/') ? 'navi' : '' }} current" href="{{ route('home') }}">Главная</a>
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
                <a class="{{ Route::is('about-us') ? 'navi' : '' }} current" href="{{ route('about-us') }}">Онас</a>
            </li>
            <li class="nav-item menu-item-last my-auto col">
                <a class="{{ Route::is('contacts') ? 'navi' : '' }} current" href="{{ route('contacts') }}">Контакты</a>
            </li>
        </ul>
    </div>
</nav>
    <script>
        // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
        window.onscroll = function() {scrollFunction()};

        function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                document.getElementById("navbar").style.padding = "30px 10px";
                document.getElementById("logo").style.height = "4vh";
            } else {
                document.getElementById("navbar").style.padding = "40px 10px";
                document.getElementById("logo").style.height = "6vh";
            }
        }
    </script>
</div>

