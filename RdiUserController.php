<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\RdiUser;
use App\Form\RdiUserType;
use App\Repisotory\RdiUserRepository;

class RdiUserController extends AbstractController
{
    /**
     * @Route("/rdi/user", name="rdi_user")
     * @param Request $request
     * @return Repsonse
     */
    public function index(Request $request) : Response
    {
        // On crée un utilisateur
        $rdiuser = new Rdiuser();

        // On récupère le formulaire
        $form = $this->createForm(RdiUserType::class, $rdiuser);
        
        
        // Si le formulaire a été soumis
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()) {

            // On enregistre l'utilisateur en bdd
            $em = $this->getDoctrine()->getManager();
            // $rdiuser->setNom('Dupont');
            // $rdiuser->setPrenom('Pierre');
            // $rdiuser->setEmail('pierredupont@gmail.fr');
            // $rdiuser->setMobile('06 13 45 56 45');
            $em->persist($rdiuser);
            $em->flush(); // Transférer l'information vers la base de données "eureka1"

            // $request->getSession()->getFlashBag()->add();
            $this->addFlash('info', "La fiche de l'utilisateur " . $rdiuser->getNom() . " a été crée");
            return $this->redirectToRoute("rdi_user");
            // return $this->redirectToRoute("templates");


            // return $this->render('rdi_user/index.html.twig', [
            //     // 'controller_name' => 'RdiUserController',
            //     'form' => $rdiuser
            // ]);

            // return new Response ("L'utilisateur a été ajouté");

            // // return $this->redirectToRoute('rdiuser');
            // return $this->redirect($this->generateUrl(
            //     'admin_post_show',
            //     array('id' => $post->getId())
            // ));
        }
        // else {
        //     $this->addFlash('info', "Veuillez remplir tous les champs");
        // }

        $formView = $form->createView();

        return $this->render('rdi_user/index.html.twig', [
            // 'controller_name' => 'RdiUserController',
            'form' => $form->createView(), // On créé la vue du formulaire, la générer
        ]);
    }
}
