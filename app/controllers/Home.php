<?php
class Home extends Controller
{
    public function index()
    {
        $data['title'] = 'Selamat Datang di Buku Kita';
        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }
}
