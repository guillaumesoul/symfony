<?php

namespace Shorty\FirstBundle\Controller;

use Shorty\FirstBundle\Entity\ShortenedUrl;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Shorty\FirstBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;
use Shorty\FirstBundle\Services\HashSlugGenerator;
use Shorty\FirstBundle\Services\Sha1;
use Shorty\FirstBundle\Services\Md5;

class DefaultController extends Controller
{

    public function indexAction($name)
    {
        //$slugGenerator = new HashSlugGenerator(new Sha1());
        //var_dump($slugGenerator->generateSlug('www.google.com'));
        //$slugGenerator2 = new HashSlugGenerator(new Md5());
        //var_dump($slugGenerator2->generateSlug('www.google.com'));

        $slugGenerator = $this->get("shorty.hashsluggenerator");
        var_dump($slugGenerator->generateSlug('www.google.com'));

        return $this->render('FirstBundle:Default:index.html.twig', array('name' => $name));
    }

    public function testAction()
    {
        return $this->render('FirstBundle:Test:index.html.twig');
    }

    //formulaire

    public function formAction(Request $request)
    {
        // just setup a fresh $task object (remove the dummy data)
        $shortenedurl = new ShortenedUrl();

        //$form = $this->createShortenedUrlForm($task);
        $form = $this->createFormBuilder($shortenedurl)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('save', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            $this->getDoctrine()->getManager()->persist($shortenedurl);
            $this->getDoctrine()->getManager()->flush($shortenedurl);
            return $this->redirect('task_success',array('toto'=>'titi'));
        } else {
            return $this->render('FirstBundle:Form:index.html.twig', array(
                'form' => $form->createView(),
            ));
        }



        // ...
    }

    public function successAction()
    {
        return $this->render('FirstBundle:Form:success.html.twig');
    }

    //methode de creation de formulaire (si on veut l'utiliser dans un post et un get par exemple
    private function createShortenedUrlForm($task)
    {
        return $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('save', 'submit')
            ->getForm();
    }


    /*
    public function formAction(Request $request)
    {
        // crée une tâche et lui donne quelques données par défaut pour cet exemple
        $task = new Task();
        $task->setTask('Write a blog post');
        $task->setDueDate(new \DateTime('tomorrow'));

        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('save', 'submit')
            ->getForm();

        return $this->render('FirstBundle:Form:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }
    */



}
