<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller{
    public function index()
    {
        $allItem = "allItem";
        $singleItem = 'singleItem';
        $items = Item::all();
        return view('item.item',['allItem'=>$items]);
    }

    public function ItemSave(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'type' => 'required',
            'qty' => 'required'

        ]);

        $item = new Item();
        $item->name = $request->name ;
        $item->type = $request->type;
        $item->qty = $request->qty;

        $item->save();

        return redirect('/item')->with('message','Producto agregado satisfactoriamente');
        }

        public function Edit($id)
        {
            $item = Item::find($id);
            return view('item.itemEdit',['singleItem'=>$item]);
        }


        public function Update(Request $request)
        {
            $item = Item::find($request->id);
            $item->name = $request->name ;
            $item->type = $request->type;
            $item->qty = $request->qty;

            $item->save();

        return redirect('/item')->with('message','Producto editado satisfactoriamente');

        }

        public function Delete($id)
        {
            $item = Item::find($id);
            $item->delete();

            return redirect('/item')->with('message','Producto eliminado satisfactoriamente');
        }
}