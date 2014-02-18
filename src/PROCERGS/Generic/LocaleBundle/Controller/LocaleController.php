<?php

namespace PROCERGS\Generic\LocaleBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class LocaleController extends Controller
{
    /**
     * @Route("/set/{_locale}")
     */
    public function setAction(Request $request, $_locale)
    {
        return $this->redirect($this->generateUrl('lc_home'));
    }

}
