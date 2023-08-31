<ul>
    @foreach ($data as $item)
    <li>
        {{ $item->nama_gedung }}
    </li>
    @endforeach
</ul>
