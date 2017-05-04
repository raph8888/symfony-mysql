<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class LuckyController extends Controller
{
    /**
     * @Route("/lucky/list")
     */
    public function listAction(Request $request)
    {

        $page = $request->server->get('HTTP_HOST');
        $request = Request::createFromGlobals();

        $data = array('username' => 'jane.doe');

        // the shortcut defines three optional arguments
        return $this->json($data, $status = 200, $headers = array(), $context = array());


    }


    public function showAction($slug)
    {

        $number = mt_rand(0, $slug);

        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
    }

}