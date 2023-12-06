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
        $program->setCountry('USA');
        $program->setYear('2011');
        $program->setPoster('poster');
        $this->addReference('program_Walking dead', $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Pamela Rose');
        $program->setSynopsis('Bullit et Riper mènent l\'enquête');
        $program->setCategory($this->getReference('category_Humour'));
        $program->setCountry('France');
        $program->setYear('2023');
        $program->setPoster('poster');
        $this->addReference('program_Pamela Rose', $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Oggy et les cafards');
        $program->setSynopsis('chat contre cafards');
        $program->setCategory($this->getReference('category_Animation'));
        $program->setCountry('France');
        $program->setYear('1999');
        $program->setPoster('poster');
        $this->addReference('program_Oggy et les cafards', $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Breaking Bad');
        $program->setSynopsis('hum la met\'');
        $program->setCategory($this->getReference('category_Action'));
        $program->setCountry('USA');
        $program->setYear('2008');
        $program->setPoster('poster');
        $this->addReference('program_Breaking Bad', $program);
        $manager->persist($program);

        $program = new Program();
        $program->setTitle('Secret Invasion');
        $program->setSynopsis('Invasion planète terre');
        $program->setCategory($this->getReference('category_Fantastique'));
        $program->setCountry('USA');
        $program->setYear('2023');
        $program->setPoster('poster');
        $this->addReference('program_Secret Invasion', $program);
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
