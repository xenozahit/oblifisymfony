<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Role as RoleEntity;

class Role extends Fixture{
    public function load(ObjectManager $manager){        

        $role = new RoleEntity();
        $role->setName('Super admin');
        $manager->persist($role);

        $role = new RoleEntity();
        $role->setName('Beneficiary admin');
        $manager->persist($role);

        $role = new RoleEntity();
        $role->setName('Beneficiary manager');
        $manager->persist($role);

        $role = new RoleEntity();
        $role->setName('Provider admin');
        $manager->persist($role);

        $role = new RoleEntity();
        $role->setName('Provider manager');
        $manager->persist($role);

        $manager->flush();
    }
}
