<?php
// src/Controller/DefaultController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Doctrine\DBAL\Driver\Connection;
use Symfony\Component\HttpFoundation\JsonResponse;


class DefaultController extends Controller
{


    public function index(Connection $connection)
    {
        $users = $connection->fetchAll('SELECT * FROM user');
        $name = "Hello World";

        return $this->render('base.html.php', array(
            'name' => $name
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

        return JsonResponse::create($availableTags);

    }



}