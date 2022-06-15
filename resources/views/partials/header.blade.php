  <header>
    <nav class="nav justify-content-center">
      <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : ''}}" href="{{ route('home')}}">Home</a>
      <a class="nav-link {{ Route::currentRouteName() == 'travel.index' || Route::currentRouteName() == 'travel.show' ? 'active' : '' }}" href="{{route('travel.index')}}">Holidays</a>
    </nav>
  </header>