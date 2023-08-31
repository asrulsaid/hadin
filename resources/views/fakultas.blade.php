<ul>
    @foreach ($data as $fakultas)
        <li><a href="{{ $fakultas->id }}">{{ $fakultas->nama_resmi }}</a></li>
    @endforeach
</ul>
