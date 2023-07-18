<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection\paginate;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class PostController extends Controller
{
    //
    public function index(){
        $response = Http::get('https://jsonplaceholder.typicode.com/posts');
        $data = $response->json();
        $data = collect($data)->paginate(10);
        return view('table', compact('data'));
    }

    public function store(){
    
        $response = Http::post('https://jsonplaceholder.typicode.com/posts', [
            'title' => 'This is test from ItSolutionStuff.com',
            'body' => 'This is test from ItSolutionStuff.com as body',
        ]);

        $jsonData = $response->json();

        dd($jsonData);
    
    }

    public function update(){
    
        $response = Http::put('https://jsonplaceholder.typicode.com/posts/1', [
            'title' => 'This is test from ItSolutionStuff.com',
            'body' => 'Abbas Hassan',
        ]);

        $jsonData = $response->json();

        dd($jsonData);
    
    }

    public function delete(){
    
       $response = Http::delete('https://jsonplaceholder.typicode.com/posts/1');

        $jsonData = $response->json();

        dd($jsonData);
    
    }
}
