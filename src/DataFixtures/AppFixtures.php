<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker\Factory;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = Factory::create('fr_FR');

        $firstName = $faker->firstName();
        $lastName = $faker->lastName();
        $email = $faker->email();
        $address = $faker->address();
        $postalCode = $faker->postcode();
        $city = $faker->city();
        $department = $faker->departmentNumber();
        $profilePicture = $faker->imageUrl(125, 125);
        $description = '<p>' . join('</p><p>', $faker->paragraphs(5)) . '</p>'; 

        for ($i=1; $i <= 45; $i++) { 
            $proUser = new ProUser();
    
            $proUser->setFirstName($firstName)
                    ->setLastName($lastName)
                    ->setPhoneNumber("0102030405")
                    ->setEmail($email)
                    ->setJobCategory("Orthophoniste")
                    ->setAddress($address)
                    ->setPostalCode($postalCode)
                    ->setCity($city)
                    ->setDepartment($department)
                    ->setProfilePicture($profilePicture)
                    ->setDescription($description);
    
            $manager->persist($proUser);
        }

        $manager->flush();
    }
}
