<header class="navbar navbar-expand-lg oswald">
    <div class="container">
        <div class="navbar-brand">
            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="Logo" width="50" height="50">
        </div>

        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav gap-5">
                <li class="nav-item">
                    <a class="{{ Route::currentRouteName() === 'comics.index' ? 'nav-active' : '' }}"
                        href="{{ route('comics.index') }}" aria-current="page">Comics</a>
                </li>
                <li class="nav-item">
                    <a class="{{ Route::currentRouteName() === 'comics.create' ? 'nav-active' : '' }}"
                        href="{{ route('comics.create') }}" aria-current="page">Add Comic</a>
                </li>
            </ul>
        </div>
        <div class="search">
            <input type="search" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
    </div>
</header>
<div class="jumbotron"></div>
