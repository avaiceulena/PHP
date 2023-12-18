<h1>Shopping List</h1>

<ul>
    @foreach($items as $item)
        <li>
            {{ $item->name }} - €{{ $item->price }}
            <form method="post" action="/items/{{ $item->id }}" style="display: inline;">
            
                <a href="{{ url('/items/' . $item->id . '/edit') }}">
                    <button type="button">Edit</button>
                </a>

                @csrf
                @method('delete')
                <button type="submit">Delete</button>
            </form>
        </li>
    @endforeach
</ul>

<p>Total Amount: €{{ $totalAmount }}

<a href="{{ url('/items/create') }}">
    <button type="button">Add Item</button>
</a>
