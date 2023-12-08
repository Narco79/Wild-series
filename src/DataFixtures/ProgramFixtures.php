<?php

namespace App\DataFixtures;

use App\Entity\Program;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

use Faker\Factory;

class ProgramFixtures extends Fixture implements DependentFixtureInterface
{
    public const PROGRAMS = [
        [
            'title' => 'Walking dead',
            'synopsis' => 'lorem',
            'country' => 'USA',
            'year' => 2011,
            'category' => 'Horreur',
            'reference' => 'program_1'
        ], [
            'title' => 'Walker texas',
            'synopsis' => 'lorem',
            'country' => 'USA',
            'year' => 1999,
            'category' => 'Action',
            'reference' => 'program_2'
        ], [
            'title' => 'oggy ',
            'synopsis' => 'lorem',
            'country' => 'France',
            'year' => 2011,
            'category' => 'Animation',
            'reference' => 'program_3'
        ], [
            'title' => 'Pamela Rose',
            'synopsis' => 'lorem',
            'country' => 'France',
            'year' => 2023,
            'category' => 'Humour',
            'reference' => 'program_4'
        ], [
            'title' => 'Walking',
            'synopsis' => 'lorem',
            'country' => 'USA',
            'year' => 2015,
            'category' => 'Aventure',
            'reference' => 'program_5'
        ]
    ];
    public function load(ObjectManager $manager)

    {

        $faker = Factory::create();
        foreach (self::PROGRAMS as $programName) {

            $program = new Program();
            $program->setTitle($programName['title']);
            $program->setSynopsis($programName['synopsis']);
            $program->setCountry($programName['country']);
            $program->setYear($programName['year']);
            $program->setCategory($this->getReference('category_' . $programName['category']));
            $manager->persist($program);
            $this->addReference($programName['reference'], $program);
        }
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
