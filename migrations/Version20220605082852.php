<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220605082852 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bear CHANGE col1 col1 VARCHAR(28) NOT NULL, CHANGE col2 col2 VARCHAR(26) NOT NULL, CHANGE col3 col3 VARCHAR(13) NOT NULL, CHANGE col4 col4 NUMERIC(10, 0) NOT NULL, CHANGE col5 col5 NUMERIC(10, 0) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bear CHANGE col1 col1 VARCHAR(28) DEFAULT NULL, CHANGE col2 col2 VARCHAR(26) DEFAULT NULL, CHANGE col3 col3 VARCHAR(13) DEFAULT NULL, CHANGE col4 col4 NUMERIC(9, 7) DEFAULT NULL, CHANGE col5 col5 NUMERIC(8, 7) DEFAULT NULL');
    }
}
