<h1>Add New Item</h1>

<form method="post" action="/items">
    @csrf
    <label for="name">Item Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="price">Item Price:</label>
    <input type="number" id="price" name="price" step="0.01" required>

    <button type="submit">Add Item</button>
</form>
