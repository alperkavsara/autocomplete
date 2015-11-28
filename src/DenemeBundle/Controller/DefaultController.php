<?php

namespace DenemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $dizi=[];
        array_push($dizi,"ali");
        array_push($dizi,"veli");
        array_push($dizi,"deli");
        array_push($dizi,"elma");
        array_push($dizi,"kiraz");
        return $this->render('DenemeBundle:Default:index.html.twig', array('dizi'=>$dizi));
    }

    public function getirAction(Request $request)
    {
        $deger=$request->request->get('deger');



      return $this->render('DenemeBundle:Default:mesaj.html.twig',array());
    }
}
