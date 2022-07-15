<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       $movie = new Movie();
       $movie->setTitle("Nagy Harcos");
       $movie->setReleaseYear(1998);
       $movie->setDescription("Ez a harcos film leírása");
       $movie->setImagePath("https://m.blog.hu/fo/fotelguru/image/.external/.thumbs/4d6994b17b2ff53aeeb3d94e9d3a3be8_d49afe6e3b4eb7cadfe308837303ec67.jpg");
       $movie->addActor($this->getReference('actor_1'));
       $movie->addActor($this->getReference('actor_2'));
       $manager->persist($movie);

        $movie2 = new Movie();
        $movie2->setTitle("Kis Harcos");
        $movie2->setReleaseYear(2000);
        $movie2->setDescription("Ez a kis film leírása");
        $movie2->setImagePath("https://www.szepmuveszeti.hu/app/uploads/2021/10/32348.jpg");
        $movie2->addActor($this->getReference('actor_3'));
        $movie2->addActor($this->getReference('actor_4'));

        $manager->persist($movie2);

        $manager->flush();

    }
}
