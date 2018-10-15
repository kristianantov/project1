<?php
/**
 * Created by PhpStorm.
 * User: Kristian
 * Date: 10/6/2018
 * Time: 10:52 PM
 */

namespace App\Command;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Doctrine\DBAL\Driver\Connection;

class TestCommand extends Command
{

    private $conn;

    public function __construct(Connection $conn)
    {

        $this->conn = $conn;

        parent::__construct();
    }


    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:test-kris')

            // the short description shown while running "php bin/console list"
            ->setDescription('Creates a test task.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command is test')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        // outputs multiple lines to the console (adding "\n" at the end of each line)
        $output->writeln([
            'test',
            '============',
            '',
        ]);

        $users = $this->conn->fetchAll('SELECT * FROM user');

        foreach ($users as $curr ) {
            $output->writeln([
                'User '.$curr['email'],
                '------------',
            ]);
        }




    }
}