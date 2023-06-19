<?php

namespace App\Http\Libraries;

use Illuminate\Support\Facades\Http;

class BaseApi
{
    protected $baseUrl;

    public function __construct()
    {
        $this->baseUrl ="http://127.0.0.1:6666";
    }

    private function client()
    {
         return Http::baseUrl($this->baseUrl);
    }

    public function index(String $endpoint, Array $data = [])
    {
        return $this->client()->get($endpoint, $data);
    }

    public function create(String $endpoint, Array $data = [])
    {
        return $this->client()->post($endpoint, $data);
    }

    public function detail(String $endpoint, String $id, Array $data = [])
    {
        return $this->client()->get("$endpoint/$id", $data);
    }

    public function update(String $endpoint, String $id, Array $data = [])
    {
        return $this->client()->patch("$endpoint/$id", $data);
    }

    public function delete(String $endpoint, String $id)
    {
        return $this->client()->delete("$endpoint/$id");
    }

    public function trash(String $endpoint, Array $data = [])
    {
        // manggil ke func client yang diatas, terus manggil path yang dari $endpoint yang dikirim controllernya, kalau ada data yang mau dicari (params di postman) diambil dari parameter2 $data
        return $this->client()->get($endpoint, $data);
    }
    public function restore(String $endpoint, Array $data = [])
    {
        // manggil ke func client yang diatas, terus manggil path yang dari $endpoint yang dikirim controllernya, kalau ada data yang mau dicari (params di postman) diambil dari parameter2 $data
        return $this->client()->get($endpoint, $data);
    }
    public function permanent(String $endpoint, Array $data = [])
    {
        // manggil ke func client yang diatas, terus manggil path yang dari $endpoint yang dikirim controllernya, kalau ada data yang mau dicari (params di postman) diambil dari parameter2 $data
        return $this->client()->get($endpoint, $data);
    }
}