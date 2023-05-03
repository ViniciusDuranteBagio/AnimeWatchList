<?php

declare(strict_types=1);

namespace watchlist\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230217025316 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'creating content list table';
    }

    public function up(Schema $schema): void
    {

        $this->addSql('CREATE TABLE content_list (
        id_content_list int,
        id_list int,
        id_content int,
        nm_status varchar(255),
        nm_episode int
        ');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
