<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4border-bottom">

        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">

            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">{{ Auth::user()->name ?? "HomePage"}}</span>
        </a>
        <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link">Home</a></li>

            <li class="nav-item"><a href="#" class="nav-link">Features</a></li>

            <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>

            <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>

            <li class="nav-item"><a href="#" class="nav-link">About</a></li>

            <li class="nav-item"><a href="{{ Auth::user() ? '/logout': '/login'}}" class="nav-link active" aria-current="page">{{ Auth::user() ? 'Logout' :'Login'}}</a></li>

        </ul>
    </header>
</div>