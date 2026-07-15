<ul>
@foreach($items as $item)
    <li>{{ $item->item_name }} ({{ $item->quantity }}) - {{ $item->category }}</li>
@endforeach
</ul>

{{--
Reflection:
Eloquent simplified how I interacted with the database.
It helped me write less code and think in objects instead of queries.
It's a more modern, scalable way to work with data.
--}}

{{--
Reflection (my own):
Rebuilding the inventory with a migration and model felt much cleaner than
typing raw SQL by hand. Once the Item model was connected to the table,
loading every row in the controller took a single line: Item::all() which was nice.
--}}
