<?php

namespace App\Controllers;

use App\Utils\AbstractController;

class CreateController extends AbstractController
{
    public function index()
    {
        session_destroy();
        $this->redirectToRoute('/');
    }
}