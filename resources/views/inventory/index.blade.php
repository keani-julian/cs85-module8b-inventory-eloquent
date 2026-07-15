<ul>
@foreach($items as $item)
    <li>{{ $item->item_name }} ({{ $item->quantity }}) - {{ $item->category }}</li>
@endforeach
</ul>
