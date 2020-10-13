<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="https://www.boolean.careers/images/misc/logo.png" alt="logo-boolean">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link {{ (url()->current() == route('home')) ? 'active' : ''}}" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link {{ (url()->current() == route('chisiamo')) ? 'active' : ''}}" href="{{route('chisiamo')}}">Chi siamo</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link {{ (url()->current() == route('studenti')) ? 'active' : ''}}" href="{{route('studenti')}}">Studenti</a>
        </li>
      </ul>
    </div>
</nav>