<?php

namespace Shorty\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Shorty\FirstBundle\Entity\Task;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

    public function indexAction($name)
    {
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
        $task = new Task();

        //$form = $this->createShortenedUrlForm($task);
        $form = $this->createFormBuilder($task)
            ->add('task', 'text')
            ->add('dueDate', 'date')
            ->add('save', 'submit')
            ->getForm();

        $form->handleRequest($request);

        if ($form->isValid()) {
            // fait quelque chose comme sauvegarder la tâche dans la bdd
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
