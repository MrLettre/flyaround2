<?php
/**
 * Created by PhpStorm.
 * User: garniermaxime
 * Date: 16/05/2018
 * Time: 10:46
 */
namespace AppBundle\Controller;

use AppBundle\Entity\Review;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Review controller.
 *
 * @Route("review")
 */

class ReviewController extends Controller
{



/**
 * Lists all review entities.
 *
 * @Route("/", name="review_index")
 * @Method("GET")
 */

public function indexAction()
{
    $em = $this->getDoctrine()->getManager();

    $review = $em->getRepository('AppBundle:Review')->findAll();

    return $this->render('review/index.html.twig', array(
        'review' => $review,
    ));
}

/**
 * Creates a new planeModel entity.
 *
 * @Route("/new", name="review_new")
 * @Method({"GET", "POST"})
 */

    public function newAction()
    {
        $em = $this->getDoctrine()->getManager();

        $review = $em->getRepository('AppBundle:Review')->findAll();

        return $this->render('review/new.html.twig', array(
            'review' => $review,
        ));
    }

}