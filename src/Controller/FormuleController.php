<?php

namespace App\Controller;

class FormuleController extends AbstractController
{
    /**
     * Display home page
     */
    public function index(): string
    {
        return $this->twig->render('Formule/index.html.twig');
    }
}
