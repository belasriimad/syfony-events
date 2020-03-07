<?php

namespace App\DataFixtures;
use App\Entity\Event;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class EventFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $start = new \DateTime();
        $end = new \DateTime();
        $end = $end->modify("+3 day");
        for($i=0;$i<10;$i++){
            $event = new Event();
            $event->setTitle('Lorem ipsum event number '.rand(0,10));
            $event->setStart($start);
            $event->setEnd($end);
            $manager->persist($event);
        }
        $manager->flush();
    }
}
