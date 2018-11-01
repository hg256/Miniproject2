<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
<a class="navbar-brand" href="#">Navbar</a>


<div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('about')}}">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('contact')}}">Contact</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>
    </ul>
</div>
</nav>