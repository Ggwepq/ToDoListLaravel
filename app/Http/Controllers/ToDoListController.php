<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    public function index(){
        return view('welcome', ['listItem' => ListItem::where('is_complete',0)->get()]);
    }

    public function saveItem(Request $request){

        $newListItem = new ListItem();
        $newListItem->name = $request->newtodo;
        $newListItem->is_complete = 0;
        $newListItem->save();

        return redirect('/');
    }

    public function itemDone($id){
        $listItem = ListItem::find($id);
        $listItem->is_complete = 1;
        $listItem->save();

        return redirect('/');
    }
}
