<?php
/**
 * Created by PhpStorm.
 * User: roberto
 * Date: 08/09/15
 *
 *
 *
 */

namespace Acme\Bundle\BlogBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class LuckyController extends Controller
{
    public function numberAction(){
        $data = rand(0, 100);

        $html = $this->container->get('templating')->render(
            'AcmeBlogBundle:lucky:number.html.twig',
            array('luckyNumberList' => $data)
        );

        return new Response($html);

    }

}