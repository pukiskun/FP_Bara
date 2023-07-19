<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('your-logo.png') }}" alt="Logo">
        </a>

        <form class="d-flex mx-auto">
            <input class="form-control me-2" type="search" placeholder="Search..." aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <div class="profile">
            @if (Auth::check())
                <a href="{{ route('profile') }}">
                    <img src="{{ Auth::user()->avatar }}" alt="Profile Avatar">
                </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
            @endif
        </div>
    </div>
</nav>
