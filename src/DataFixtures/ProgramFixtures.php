<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $program = new Program();
        $program->setTitle('Walking dead');
        $program->setSynopsis('Un virus zombie décime la terre');
        $program->setCategory($this->getReference('category_Horreur'));
        $program->setPoster('poster');
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Pamela Rose');
        $program->setSynopsis('Bullit et Riper mènent l\'enquête');
        $program->setCategory($this->getReference('category_Humour'));
        $program->setPoster('poster');
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Oggy et les cafards');
        $program->setSynopsis('chat contre cafards');
        $program->setCategory($this->getReference('category_Animation'));
        $program->setPoster('poster');
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Breaking Bad');
        $program->setSynopsis('hum la met\'');
        $program->setCategory($this->getReference('category_Action'));
        $program->setPoster('poster');
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Secret Invasion');
        $program->setSynopsis('Invasion planète terre');
        $program->setCategory($this->getReference('category_Fantastique'));
        $program->setPoster('poster');
        $manager->persist($program);
        $manager->flush();
    }

    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
            CategoryFixtures::class,
        ];
    }
}
