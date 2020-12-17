<?php

namespace App\Controllers;

class Pages extends BaseController
{
    protected $comicModel;
    public function __construct()
    {
        $this->comicModel = new \App\Models\ComicsModel();
    }
    public function home()
    {
        $db = db_connect();
        $query = $db->query('SELECT * FROM comics ORDER BY updated_at');
        $comic =  $query->getResultArray();
        $data = [
            'title' => 'Home',
            'comic' => $comic
        ];
        echo view('pages\home', $data);
    }

    public function about()
    {
        $data = [
            'title' => 'About'
        ];
        echo view('pages\about', $data);
    }

    public function list()
    {

        $comic = $this->comicModel->findAll();

        $data = [
            'title' => 'List',
            'comic' => $comic
        ];


        // * from pada querry

        echo view('pages\list', $data);
    }
}
