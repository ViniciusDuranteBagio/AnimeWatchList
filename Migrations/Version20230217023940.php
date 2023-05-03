<?php

declare(strict_types=1);

namespace watchlist\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230217023940 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Creating List Table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE lists (
        id_list int,
        id_user int,
        tp_list varchar(255),
        nm_list varchar(255));
        ');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
