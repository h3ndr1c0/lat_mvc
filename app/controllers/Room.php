<?php

class Room extends Controller {
    public function index()
    {
        $data['judul'] = 'Room';
       // $data['rm'] = $this->model('Room_model')->getAllRoom();
        $this->view('templates/header', $data);
        $this->view('room/index', $data);
        $this->view('templates/footer');

    }

}