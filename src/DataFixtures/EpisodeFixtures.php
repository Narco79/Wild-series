<?php

namespace App\DataFixtures;

use App\Entity\Episode;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class EpisodeFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $episode = new Episode();
        $episode->setTitle('Days Gone Bye');
        $episode->setNumber('1');
        $episode->setSeason($this->getReference('season1_Walking dead'));
        $episode->setSynopsis('Rick Grimes, shérif, est blessé à la suite d\'une course-poursuite.
        Il se retrouve dans le coma. Cependant, lorsqu\'il se réveille dans l\'hôpital,
        il ne découvre que désolation et cadavres. Se rendant vite compte qu\'il est seul,
        il décide d\'essayer de retrouver sa femme Lori et son fils Carl.');
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setTitle('Guts');
        $episode->setNumber('2');
        $episode->setSeason($this->getReference('season1_Walking dead'));
        $episode->setSynopsis('Rick parvient à s\'échapper du tank grâce à l\'aide de Glenn,
        dont il avait entendu la voix à la radio. Rick et Glenn se réunissent avec les compagnons de Glenn,
        un autre groupe de survivants dont Andrea, T-dog, Merle, Morales, Jacqui, venus pour se ravitailler au supermarché.');
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setTitle('Tell It to the Frogs');
        $episode->setNumber('3');
        $episode->setSeason($this->getReference('season1_Walking dead'));
        $episode->setSynopsis('De retour au camp avec le groupe de survivants du supermarché,
        Rick retrouve enfin et avec beaucoup d\'émotion sa femme Lori et son fils Carl.
        Andrea quant à elle, rejoint sa jeune sœur Amy.');
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setTitle('Vatos ');
        $episode->setNumber('4');
        $episode->setSeason($this->getReference('season1_Walking dead'));
        $episode->setSynopsis('En cherchant Merle, le groupe essaie aussi,
        par la même occasion, de retrouver le sac d\'armes mais un autre groupe de survivants,
        également en quête des armes, les attaque.');
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setTitle('What Lies Ahead');
        $episode->setNumber('1');
        $episode->setSeason($this->getReference('season2_Walking dead'));
        $episode->setSynopsis('Après l\'explosion du CDC, les survivants reprennent la route et se dirigent vers Fort Benning.
        Après un arrêt inopiné au milieu de l\'autoroute dû à un carambolage de véhicules abandonnés,
        le groupe se fait attaquer par une horde de rôdeurs. Poursuivie par deux rôdeurs,
        Sophia s\'enfuit alors dans les bois et malgré l\'intervention de Rick, elle finit par se perdre.
        Le groupe part à sa recherche.');
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setTitle('Bloodletting');
        $episode->setNumber('2');
        $episode->setSeason($this->getReference('season2_Walking dead'));
        $episode->setSynopsis('Après que Carl s\'est fait tirer dessus par un chasseur,
        Rick trouve de l\'aide chez Hershel Greene, un vétérinaire vivant dans une ferme non loin de l\'autoroute.
        Il découvre alors que le chasseur est Otis, un membre de la famille de Hershel.');
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setTitle('Save the Last One');
        $episode->setNumber('3');
        $episode->setSeason($this->getReference('season2_Walking dead'));
        $episode->setSynopsis('À court de munitions, Shane décide de tirer sur Otis pour faire diversion
        et lui permettre de s\'enfuir avec le matériel. De retour à la ferme, il raconte qu\'Otis s\'est sacrifié pour que Carl puisse être soigné.
        Sophia, quant à elle, reste introuvable et les recherches se poursuivent.');
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setTitle('Cherokee Rose');
        $episode->setNumber('4');
        $episode->setSeason($this->getReference('season2_Walking dead'));
        $episode->setSynopsis('Les funérailles d\'Otis ont lieu, bien que son corps ne soit pas présent.
        Daryl décide de continuer à chercher Sophia,
        et entre dans une maison abandonnée où il trouve des restes de nourriture récemment consommée.');
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setTitle('Seed');
        $episode->setNumber('1');
        $episode->setSeason($this->getReference('season3_Walking dead'));
        $episode->setSynopsis('Quelques mois après avoir dû quitter précipitamment la ferme de Hershel,
        les survivants explorent les environs à la recherche d\'un nouvel endroit sûr, en vain.
        L\'accouchement de Lori est imminent.');
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setTitle('Sick ');
        $episode->setNumber('2');
        $episode->setSeason($this->getReference('season3_Walking dead'));
        $episode->setSynopsis('Après qu\'Hershel s\'est fait mordre par un rôdeur dans les couloirs de la prison
        et que Rick a dû lui couper la jambe pour éviter que l\'infection ne se propage,
        les survivants tombent sur un petit groupe de détenus composé de Thomas, Axel, Oscar, Andrew et « Big Tiny » qui ont échappé à l\'épidémie.');
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setTitle('Walk with Me');
        $episode->setNumber('3');
        $episode->setSeason($this->getReference('season3_Walking dead'));
        $episode->setSynopsis('Andrea, séparée du groupe depuis l\'attaque de la ferme par les rôdeurs et sa nouvelle acolyte de survie,
        la mystérieuse et imperturbable Michonne, assistent au crash d\'un hélicoptère militaire en pleine forêt.');
        $manager->persist($episode);

        $episode = new Episode();
        $episode->setTitle('Killer Within ');
        $episode->setNumber('4');
        $episode->setSeason($this->getReference('season3_Walking dead'));
        $episode->setSynopsis('Alors que Rick et ses camarades sont en train de sécuriser les lieux,
        ils se retrouvent face à Axel et Oscar, les deux prisonniers rescapés, qui les supplient de pouvoir rester avec eux,
        ce qui leur est refusé. Soudain, une horde de rôdeurs envahit la prison et les survivants sont contraints de se séparer en plusieurs petits groupes.');
        $manager->persist($episode);
        $manager->flush();
    }
    public function getDependencies()
    {
        // Tu retournes ici toutes les classes de fixtures dont ProgramFixtures dépend
        return [
            SeasonFixtures::class,
        ];
    }
}
