<?php

declare(strict_types=1);

namespace watchlist\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230203031842 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Criando a tabela de usuarios';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE users (
        id int,
        login varchar(60),
        password varchar(60),
        nm_userName varchar(50),
        nm_email varchar(60)
        );
        ');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
