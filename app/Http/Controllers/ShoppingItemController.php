<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingItem;

class ShoppingItemController extends Controller
{
    public function index()
    {
        $items = ShoppingItem::all();
        $totalAmount = $items->sum('price');

        return view('shopping-list.index', compact('items', 'totalAmount'));
    }

    public function store(Request $request)
{
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
        ]);

    
        $data = $request->except('_token');
        
        ShoppingItem::create($data);

        return redirect('/');
}

    public function edit($id)
    {
        $item = ShoppingItem::findOrFail($id);

        return view('shopping-list.edit', compact('item'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
        ]);

        
        $data = $request->except('_token', '_method');
        
        
        $item = ShoppingItem::findOrFail($id);
        $item->update($data);

        return redirect('/');
    }
    public function destroy($id)
    {
        $item = ShoppingItem::findOrFail($id);
        $item->delete();

        return redirect('/');
    }

    public function create()
    {
        return view('shopping-list.create');
    }
}

?>