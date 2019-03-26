<h2>Mano info</h2>
<ul>
<li>{{ $name }}</li>
<li>{{ $email }}</li>
<li>{{ $phone }}</li>
</ul>

<h2>Ką mėgstu</h2>
<ul>
  @forelse ($interests as $interest)
  <li>{{ $interest}}</li>
  @empty
  <p>Nieko nemegstu</p>
  @endforelse
</ul>
