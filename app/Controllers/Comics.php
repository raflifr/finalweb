<?php

namespace App\Controllers;

class Comics extends BaseController
{
    protected $comicModel;
    public function __construct()
    {
        $this->comicModel = new \App\Models\ComicsModel();
    }
    public function home()
    {
        $data = [
            'title' => 'daftar komik'
        ];

        $comicModel = new \App\Models\ComicsModel();
        // * from pada querry
        $comic = $this->comicModel->getComics();

        return view('comics/index', $data);
    }

    public function detail($slug)
    {
        $comic = $this->comicModel->getComics(($slug));
        $data = [
            'title' => 'Detail Comic',
            'comic' => $this->comicModel->getComics($slug)

        ];
        return view('comics/detail', $data);
    }
}
