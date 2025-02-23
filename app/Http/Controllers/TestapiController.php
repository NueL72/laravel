<?php

namespace App\Http\Controllers;

use App\Models\testapi;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TestapiController extends Controller
{
    /**
     * Display a listing of the resource.
     */


public function getPosts()
{
    $client = new Client([
        'headers' => [
        'Authorization' => 'Bearer '. "85150ae966974d828316ff37d9051be8",
        'Accept' => 'application/json'
        ]
    ]);
    $response = $client->get('https://api.loyverse.com/v1.0/employees');

    // Decode JSON response
    $data = json_decode($response->getBody(), true);

    return response()->json($data);
}



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(testapi $testapi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(testapi $testapi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, testapi $testapi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(testapi $testapi)
    {
        //
    }
}
