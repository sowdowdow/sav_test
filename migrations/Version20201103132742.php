<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20201103132742 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE client (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, nom VARCHAR(40) NOT NULL, prenom VARCHAR(40) DEFAULT NULL, adr1 VARCHAR(40) NOT NULL, adr2 VARCHAR(40) DEFAULT NULL, codepos VARCHAR(5) NOT NULL, ville VARCHAR(40) NOT NULL)');
        $this->addSql('CREATE TABLE client_sav (client_id INTEGER NOT NULL, sav_id INTEGER NOT NULL, PRIMARY KEY(client_id, sav_id))');
        $this->addSql('CREATE INDEX IDX_4BD2125019EB6921 ON client_sav (client_id)');
        $this->addSql('CREATE INDEX IDX_4BD212504F726353 ON client_sav (sav_id)');
        $this->addSql('CREATE TABLE sav (id INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, sav_nom VARCHAR(40) NOT NULL, sav_prenom VARCHAR(40) DEFAULT NULL, sav_adr1 VARCHAR(40) NOT NULL, sav_adr2 VARCHAR(40) DEFAULT NULL, sav_codepos VARCHAR(5) NOT NULL, sav_ville VARCHAR(40) NOT NULL, sav_probleme CLOB NOT NULL, dt_crea DATETIME NOT NULL)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE client');
        $this->addSql('DROP TABLE client_sav');
        $this->addSql('DROP TABLE sav');
    }
}
