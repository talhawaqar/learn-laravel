<?php

namespace App\Http\Controllers;
use App\Models\Post;

class WelcomeController extends Controller {
  public function welcome($name="Talha"){
    $post = new Post;
    $name = $post->getData($name);
    return view('Welcome/welcome', compact('name'));
  }
  
  public function goodbye($name="Talha"){
    echo "Goodbye {$name}";
  }
}
