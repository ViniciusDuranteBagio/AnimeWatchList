<?php

declare(strict_types=1);

namespace watchlist\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230216023545 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Creating Animes Table';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE TABLE animes (
        id_anime int,
        nm_title varchar(255),
        nm_author varchar(255),
        nm_season int,
        nr_episodeo int,
        nm_status varchar(255),
        nr_duration varchar(255),
        nr_rating varchar(255) ,
        nr_score int,
        ds_synopsis text,
        dt_release datetime,
        nm_img_title varchar(255),
        nm_release_season varchar(255),
        nm_relase_day varchar(255),
        nm_producer varchar(255),
        nm_studio varchar(255),
        nm_genre varchar(255)
        );');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
