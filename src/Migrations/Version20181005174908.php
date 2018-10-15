<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181005174908 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        $this->addSql("
        
               CREATE TABLE `user` (
              `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
              `name` varchar(255) DEFAULT 'null',
              `email` varchar(255) DEFAULT 'null',
              `username` varchar(255) DEFAULT 'null',
              `password` varchar(255) DEFAULT 'null',
              `register_datetime` datetime,
               PRIMARY KEY (`id`)
               ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        
        ");

    }

    public function down(Schema $schema) : void
    {
        $this->addSql("drop table User");

    }
}
