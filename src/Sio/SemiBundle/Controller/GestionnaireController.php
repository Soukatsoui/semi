<?php

namespace Sio\SemiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/gest")
 */
class GestionnaireController extends Controller
{
    /**
     * @Route("/export")
     * @Template()
     */
    public function exportAction()
    {
    	return array();
    }

}
