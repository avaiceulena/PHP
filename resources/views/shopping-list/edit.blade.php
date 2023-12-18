<h1>Edit Item</h1>

<form method="post" action="/items/{{ $item->id }}">
    @csrf
    @method('put')

    <label for="name">Item Name:</label>
    <input type="text" id="name" name="name" value="{{ $item->name }}" required>

    <label for="price">Item Price:</label>
    <input type="number" id="price" name="price" value="{{ $item->price }}" step="0.01" required>

    <button type="submit">Update Item</button>
</form>
