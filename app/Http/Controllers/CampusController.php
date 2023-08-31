<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CampusController extends Controller
{
    public function index() {
        $guzzle = new Client();
        $data = json_decode($guzzle->request('GET', 'https://api.codefm.my.id/fakultas')->getBody());

        return view('fakultas', [
            'data' => $data
        ]);
    }

    public function show($id) {
        $guzzle = new Client();
        $uri = 'https://api.codefm.my.id/gedungs/'.$id;
        $data = json_decode($guzzle->request('GET', $uri)->getBody());

        return view('detail', [
            'data' => $data
        ]);
    }
}
