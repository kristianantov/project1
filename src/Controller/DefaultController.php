<?php
// src/Controller/DefaultController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\DBAL\Driver\Connection;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{


    public function index(Connection $connection, Request $request)
    {
        $users = $connection->fetchAll('SELECT * FROM user');
        $name = "Hello World";

        if($request->get("sbm")) {



        }


        return $this->render('a.html.php', array(
            'name' => $name,
            'request' => $request
        ));

    }

    public function autocomplete()
    {

        $availableTags = [
            "ActionScript",
            "AppleScript",
            "Asp",
            "BASIC",
            "C",
            "C++",
            "Clojure",
            "COBOL",
            "ColdFusion",
            "Erlang",
            "Fortran",
            "Groovy",
            "Haskell",
            "Java",
            "JavaScript",
            "Lisp",
            "Perl",
            "PHP",
            "Python",
            "Ruby",
            "Scala",
            "Scheme"
        ];

        return $this->json($availableTags);

    }



}