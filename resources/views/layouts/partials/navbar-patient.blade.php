@php
    use Illuminate\Support\Facades\Auth;
@endphp
<nav class="navbar navbar-expand-lg bg-light fixed-top shadow-lg">
    <div class="container">
        <a class="navbar-brand mx-auto d-lg-none" href="#">
            Life Care 360
            <strong class="d-block">your health our priority</strong>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>



                <a class="navbar-brand d-none d-lg-block" href="/">
                    Life Care 360
                    <strong class="d-block">your health our priority</strong>
                </a>

                <li class="nav-item">
                    <a class="nav-link" href="#booking">Booking</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                <!-- <li class="nav-item active">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                </li> -->

                <li class="nav-item active">
                    @if(Auth::check())
                    <a class="nav-link" href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a>
                    @else
                    <a class="nav-link" href="{{ route('login') }}">Doctor Login</a>
                    @endif
                </li>


            </ul>
        </div>

    </div>
</nav>