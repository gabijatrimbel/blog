<h2>Kur gimiau?</h2>

<ul>
  <li>{{ $birthCity }}</li>
  <li>{{ $birthCountry }}</li>
</ul>

<h2>Kur gyvenau?</h2>

<ul>
  @forelse ($countriesLived as $country)
  <li>{{ $country }}</li>
  @empty
  <p>Tik Lietuvoj</p>
  @endforelse
</ul>
