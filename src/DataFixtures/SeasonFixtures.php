<?php

namespace App\DataFixtures;

use App\Entity\Season;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class SeasonFixtures extends Fixture implements DependentFixtureInterface
{

    public function load(ObjectManager $manager)
    {
        $season = new Season();
        $season->setNumber(1);
        $season->setProgram($this->getReference('program_Walking dead'));
        $season->setYear('2011');
        $season->setDescription('Cette saison suit les aventures de Rick Grimes,
        depuis sa sortie du coma et sa découverte des « rôdeurs » (mort-vivants),
        après une épidémie post-apocalyptique jusqu\'à l\'explosion du CDC d\'Atlanta,
        dans lequel lui et son groupe s\'était réfugié.');
        $this->addReference('season1_Walking dead', $season);
        $manager->persist($season);

        $season = new Season();
        $season->setNumber(2);
        $season->setProgram($this->getReference('program_Walking dead'));
        $season->setYear('2012');
        $season->setDescription('Cette saison suit les aventures de Rick Grimes et son groupe,
        depuis leur rencontre avec une horde de « rôdeurs » sur une autoroute,
        entraînant la disparition de Sophia Peletier,
        jusqu\'à leur fuite de la ferme des Greene qui est envahie par les « rôdeurs »');

        $this->addReference('season2_Walking dead', $season);
        $manager->persist($season);

        $season = new Season();
        $season->setNumber(3);
        $season->setProgram($this->getReference('program_Walking dead'));
        $season->setYear('2013');
        $season->setDescription('Cette saison suit les aventures de Rick Grimes,
        depuis l\'arrivée de son groupe dans une prison qu\'ils nettoient de tout les rôdeurs qui s\'y trouvent
        jusqu\'à l\'accueil des derniers habitants de Woodbury à la prison après une attaque du Gouverneur sur celle-ci');

        $this->addReference('season3_Walking dead', $season);
        $manager->persist($season);
        $manager->flush();
    }
    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
            ProgramFixtures::class,
        ];
    }
}
