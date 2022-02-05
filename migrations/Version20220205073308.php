<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220205073308 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE announce ADD proffesion_id INT DEFAULT NULL, ADD sports_id INT DEFAULT NULL, ADD hobbies_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE announce ADD CONSTRAINT FK_E6D6DD757EB68DFF FOREIGN KEY (proffesion_id) REFERENCES proffesion (id)');
        $this->addSql('ALTER TABLE announce ADD CONSTRAINT FK_E6D6DD7554BBBFB7 FOREIGN KEY (sports_id) REFERENCES sport (id)');
        $this->addSql('ALTER TABLE announce ADD CONSTRAINT FK_E6D6DD75B2242D72 FOREIGN KEY (hobbies_id) REFERENCES hobbies (id)');
        $this->addSql('CREATE INDEX IDX_E6D6DD757EB68DFF ON announce (proffesion_id)');
        $this->addSql('CREATE INDEX IDX_E6D6DD7554BBBFB7 ON announce (sports_id)');
        $this->addSql('CREATE INDEX IDX_E6D6DD75B2242D72 ON announce (hobbies_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE announce DROP FOREIGN KEY FK_E6D6DD757EB68DFF');
        $this->addSql('ALTER TABLE announce DROP FOREIGN KEY FK_E6D6DD7554BBBFB7');
        $this->addSql('ALTER TABLE announce DROP FOREIGN KEY FK_E6D6DD75B2242D72');
        $this->addSql('DROP INDEX IDX_E6D6DD757EB68DFF ON announce');
        $this->addSql('DROP INDEX IDX_E6D6DD7554BBBFB7 ON announce');
        $this->addSql('DROP INDEX IDX_E6D6DD75B2242D72 ON announce');
        $this->addSql('ALTER TABLE announce DROP proffesion_id, DROP sports_id, DROP hobbies_id, CHANGE title title VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE content content LONGTEXT NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE situation situation VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE hair_color hair_color VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE smoking smoking VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE alcool alcool VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE religion religion VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE study_level study_level VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE characters characters VARCHAR(255) DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE hobbies CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE proffesion CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE sport CHANGE name name VARCHAR(255) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
