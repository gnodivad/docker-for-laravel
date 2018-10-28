<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ProcessPodcast;

class PodcastController extends Controller
{
    public function index()
    {
        ProcessPodcast::dispatch();

        return ['status' => 'ok'];
    }
}
