<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;


#[Route('/author')]

class AuthorController extends AbstractController
{
    #[Route('/show', name: 'app_autho_show')]
    public function ShowAuthor():Response
    {
        $authorname='amouna';
         $authorEmail='ahmed@123';
        
        return $this->render('author/Sauthor.html.twig',array(
            'authorname'=>$authorname,
            'authorEmail'=>$authorEmail,

        ));
    }
    #[Route('/list', name: 'app_list_authors')]
    public function listAuthors():response 
    {
     $authors=[
      ["authorname"=>"amine","picture"=>"images/vv.jpg"],
      ["authorname"=>"amineaaa","picture"=>"images/vc.jpg"]   
     ];
      return $this->render('author/listAuthors.html.twig',array(
        'authors'=>$authors
      ));

    }   
}
