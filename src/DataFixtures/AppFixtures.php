<?php

namespace App\DataFixtures;
use App\Entity\Categorie;
use App\Entity\Formation;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Generator;
//use Generator ;
use Faker\Factory;

class AppFixtures extends Fixture
{
    private Generator $faker;
    public function __construct()
      {
        $this->faker = Factory::create('fr_FR');
      }
    public function load(ObjectManager $manager): void
    {
      

       for ($i=0; $i < 10; $i++) { 
            $formation = new Formation();  
            $formation->setTitre($this->faker->words(5,true))
           ->setDescription($this->faker->text())
           ->setCategorie($this->faker->randomDigitNot(0));
            $manager->persist($formation);
      }

        $manager->flush();
    }
}
