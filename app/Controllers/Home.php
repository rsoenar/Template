<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('pages/index');
    }
    public function urmeet()
    {
        return view('pages/meetingMenu');
    }
    public function listMeeting()
    {
        return view('pages/listMeeting');
    }
    public function new()
    {
        return view('pages/createMeet');
    }
}
