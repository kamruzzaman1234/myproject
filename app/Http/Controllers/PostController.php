<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function create(){
        return view('create');
    }

  public function ourfilestore(Request $request)
{
    $post = new Post;

    $validated = $request->validate([
        'name' => 'required',
        'description'=> 'required',
        'image'=>'required'
    ]);

    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('uploads'), $filename);

        $post->image = $filename;
    } else {
        return back()->with('error', 'Please upload an image');
    }

    $post->name = $request->name;
    $post->description = $request->description;
    $post->save();

    return redirect()->route('home')->with('success', 'Your post has been success');
}

}
