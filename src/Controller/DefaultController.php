<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\DBAL\Driver\Connection;

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
}