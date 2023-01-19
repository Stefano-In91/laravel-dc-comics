<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class ComicController extends Controller
{
    public function index() {
      $comics = Comic::all();

      return view('comics.index', compact('comics'));
    }

    public function create() {

      return view('comics.create');
    }

    public function store(Request $request) {
      $data = $request->all();

      $new_comic = new Comic;
      $new_comic->title = $data['title'];
      $new_comic->description = $data['description'];
      $new_comic->price = $data['price'];
      $new_comic->series = $data['series'];
      $new_comic->sale_date = $data['sale_date'];
      if(!isNull($data['thumb'])){
        $new_comic->thumb = $data['thumb'];
      }
      if(!isNull($data['type'])){
        $new_comic->type = $data['type'];
      }

      $new_comic->save();

      return redirect()->route('comics.show', $new_comic->id);
    }

    public function show(Comic $comic) {

      return view('comics.show', compact('comic'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}