<?php

namespace Coddict\WHMCSApiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\Request;


class ComposerController extends Controller
{
    /**
     * @Route("/test")
     */
    public function addDependencyAction(Request $request)
    {
        die($this->get('coddict.whmcsapi')->test());
    }
    
}