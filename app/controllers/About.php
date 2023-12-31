<?php
class About extends Controller
{
    public function index()
    {
        $data['title'] = 'Halaman About';
        $data['nama'] = 'Yuyun Endah';
        $data['alamat'] = 'Pelaihari Kalsel';
        $data['no_hp'] = '085248504506';

        $this->view('templates/header', $data);
        $this->view('templates/sidebar', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
}
